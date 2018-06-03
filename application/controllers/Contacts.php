<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller
{

    public function showContacts()
        //function which lead to the contacts in the navbar
    {
        if (get_cookie('username') == '') {

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        } else {

            $userUsername = $this->encryption->decrypt(get_cookie('username'));
            $data = array(
                'userUsername' => $userUsername ,
                'contacts' => $this->Contacts_model->getAllContacts($userUsername),
                'nbContacts' => $this->Contacts_model->getNbContacts($userUsername)
            );
            $this->load->view('templates/navbar');
            $this->load->view('contacts/contacts', $data);
            $this->load->view('templates/footer');
        }
    }

    public function showContactProfil (){
        if( get_cookie('username')==''){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        }
        else {


            $data['infosUser']= $this->User_model->getInfosUser($_POST['contactUsername']);
            $this->load->view('templates/navbar');
            $this->load->view('contacts/contactInfos',$data);
            $this->load->view('templates/footer');

        }
    }


    public function showAllUsers(){
        //display the list of all of the users of the site
        if( get_cookie('username')==''){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');

        }
        else {
            $userUsername = $this->encryption->decrypt(get_cookie('username'));
            $data = array('users' => $this->Contacts_model->getAllUsers(),
                'userUsername' => $userUsername ,
                'contacts' => $this->Contacts_model->getAllContacts($userUsername),

            );
            $this->load->view('templates/navbar');
            $this->load->view('contacts/usersList', $data);
            $this->load->view('templates/footer');
        }
    }

    public function addContact()
    {

            $username1= htmlspecialchars($_POST['username1']);
            $username2 = $this->encryption->decrypt(get_cookie('username'));

        $this->Contacts_model->addContact($username1,$username2);
        $this->showAllUsers();
    }

    public function deleteContact()
        //function needs a

    {
        $username1= htmlspecialchars($_POST['username1']);
        $username2 = $this->encryption->decrypt(get_cookie('username'));

        $this->Contacts_model->deleteContact($username1,$username2);
        $this->showContacts();
    }
}