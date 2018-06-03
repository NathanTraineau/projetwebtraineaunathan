<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller
{

    public function index()
    {
        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {

            $userUsername = $this->encryption->decrypt(get_cookie('username'));
            $data['events'] = $this->Event_model->getSportEvents();
            $data['userUsername'] = $userUsername;
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents', $data);
            $this->load->view('templates/footer');

        }
    }

    public function eventSheet(){
        if( get_cookie('username')==''){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        }
        else {
            $this->load->view('event/eventSheet');
        }
    }

    public function addParticipateToEvent($idEvent)
    {

        $this->load->view('dashboard/addContactParticipate', $idEvent);

    }

    public function participate($idEvent,$username)
    {
        $this->load->view('dashboard/addContactParticipate');

    }

    public function formNewSportEvent()
    {
        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {
            $data['trainings'] = $this->Trainings_model->getAllTrainings();
            $this->load->view('templates/navbar');
            $this->load->view('event/formNewSportEvent',$data);
            $this->load->view('templates/footer');
        }

    }

    public function newSportEvent()
    {

        $config = array(
            array(
                'field' => 'nameEvent',
                'label' => 'Name Event',
                'rules' => 'required|is_unique[sportevents.nameEvent]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'is_unique' => 'Name Event already taken',
                ),
            ),
            array(
                'field' => 'placeEvent',
                'label' => 'place Event',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'dateEvent',
                'label' => 'Date Event',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'descriptionEvent',
                'label' => 'description Event',
                'rules' => '',
            ),
            array(
                'field' => 'nameTraining',
                'label' => 'nameTraining Event',
                'rules' => '',
            ),


        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {

            $this->formNewSportEvent();
        } else {

            $data = array(
                "nameEvent" => htmlspecialchars($_POST['nameEvent']),
                "placeEvent" => htmlspecialchars($_POST['placeEvent']),
                "dateEvent" => htmlspecialchars($_POST['dateEvent']),
                "descriptionEvent" => htmlspecialchars($_POST['descriptionEvent']),
                "nameTraining" => htmlspecialchars($_POST['nameTraining']),
            );

            $this->Event_model->newSportEvent($data);
            //$idEvent = IDENT_CURRENT('sportevents');
            //$username=$this->encryption->decrypt(get_cookie('username'));
            //$this->Participation_model->addParticipation($idEvent,$username);
            $data['events'] = $this->Event_model->getSportEvents();
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents', $data);
            $this->load->view('templates/footer');
        }
    }

    public function deleteSportEvent()
        //function needs a

    {
        $idEvent= htmlspecialchars($_POST['idEvent']);

        $this->Event_model->deleteSportEvent($idEvent);
        $this->index();
    }
}