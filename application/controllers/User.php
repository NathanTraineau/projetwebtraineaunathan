<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function index (){
        if( get_cookie('username')==''){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        }
        else {

            $username=$this->encryption->decrypt(get_cookie('username'));
            $data['events']= $this->Event_model->getSportEvents($username);
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents',$data);
            $this->load->view('templates/footer');

        }
    }

    public function showMyProfil (){
        if( get_cookie('username')==''){

            $this->load->view('templates/login');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        }
        else {

            $userUsername=$this->encryption->decrypt(get_cookie('username'));
            $data['infosUser']= $this->User_model->getInfosUser($userUsername);
            $this->load->view('templates/navbar');
            $this->load->view('user/myProfil',$data);
            $this->load->view('templates/footer');

        }
    }
    /**
     *
     */





    public function registration(){
        //redirect the user to the registration page

        $this->load->view('templates/header');
        $this->load->view('user/registration');
        $this->load->view('templates/footer');
    }

    public function deconnexion()
    {
        delete_cookie('username');
        $this->load->view('templates/header');
        $this->load->view('user/login');
        $this->load->view('templates/footer');
    }
    public function validconnexion()
    {
        $data = array(
            "username" => htmlspecialchars($_POST['username']),
            "password" => htmlspecialchars($_POST['password']),
        );
        $valid = $this->User_model->verifyPassword($data);

        if (!$valid) {
            $data['error'] = "username or password invalid please try again";
            $this->load->view('templates/header');
            $this->load->view('user/login', $data);
            $this->load->view('templates/footer');

        } else {
        $cookie_cry = $this->encryption->encrypt($_POST['username']);
        set_cookie('username', $cookie_cry, '3600');
        $username = $this->encryption->decrypt(get_cookie('username'));
        $data['events'] = $this->Event_model->getSportEvents($username);

        //$this->load->view('plugin/calendar');*
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents',$data);
            $this->load->view('templates/footer');

    }
            }







    public function confirmregistration(){
    
      
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]|',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'is_unique' => 'user already taken',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'confirmpassword',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]',
                'errors' => array(
                'matches' => 'password don t matches.',
                'required' => 'You must provide a %s.',
            ),
            array(
                'field' => 'fbpseudo',
                'label' => 'fbpseudo',
                'rules' => '',

            ),
            )
        );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_rules(
        'username', 'Username',
        array(
                array(
                        'username_callable',
                        function()
                        {
                                return htmlspecialchars($_POST['username']) == "nathoune" ;
                        }
                )
        )
);
        $msg = htmlspecialchars($_POST['username']);
           $this->form_validation->set_message('username_callable', 'Ma grosse bite, ${msg} répond à l enigme');

 			if ($this->form_validation->run() == FALSE)
                {

                        $this->registration();
                }
                else
                {
                   
                      $this->data['message'] = 'Ma grosse bite, répond à l enigme';
                      $this->registration();
                               
                   /* $password= password_hash ( $_POST['password'] , PASSWORD_DEFAULT) ;
                       $data=array(
                        "username" => htmlspecialchars($_POST['username']),
                        "firstname"=> htmlspecialchars($_POST['firstname']),
                        "lastname"=> htmlspecialchars($_POST['lastname']),
                        "fbpseudo" => htmlspecialchars($_POST['fbpseudo']),
                        "phoneNumber" => htmlspecialchars($_POST['phoneNumber']),
                        "password" => $password,
                        );

                       $this->User_model->newUser($data);
                    $this->load->view('templates/header');
                    $this->load->view('user/login');
                    $this->load->view('templates/footer');
                    */
    }



}
}

