<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends CI_Controller
{

    public function index()
    {
        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {

            $username = $this->encryption->decrypt(get_cookie('username'));
            $data['events'] = $this->Event_model->getMySportEvents($username);
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents', $data);
            $this->load->view('templates/footer');

        }
    }

    public function sportTrainings()
    {

        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {
            $data['trainings'] = $this->Trainings_model->getAllTrainings();

            $this->load->view('templates/navbar');
            $this->load->view('sport/sportTraining',$data);
            $this->load->view('templates/footer');
        }
    }

    public function formNewSportTraining()
    {

        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {
            $data['trainings'] = $this->Trainings_model->getAllTrainings();
            $this->load->view('templates/navbar');
            $this->load->view('sport/formNewSportTraining',$data);
            $this->load->view('templates/footer');
        }
    }

    public function addSportTraining()
    {

        $config = array(
            array(
                'field' => 'nameTraining',
                'label' => 'Name Training',
                'rules' => 'required|is_unique[trainings.nameTraining]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'is_unique' => 'Training name already taken',
                ),
            ),
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {

            $this->formSportTraining();
        } else {

            $data = array(
                "nameTraining" => htmlspecialchars($_POST['nameTraining']),
                "descriptionTraining" => htmlspecialchars($_POST['descriptionTraining']),

            );

            $this->Trainings_model->newTraining($data);
            $this->sportTrainings();
        }
    }

    public function deleteSportTraining()

    {

        $nameTraining = htmlspecialchars($_POST['nameTraining']);

        $this->Trainings_model->deleteTraining($nameTraining);
        $this->sportTrainings();
    }
}