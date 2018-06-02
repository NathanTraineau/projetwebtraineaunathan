<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 29/05/2018
 * Time: 01:17
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index (){
        if( get_cookie('username')==''){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');


        }
        else {

            $cookie_decry=$this->encryption->decrypt(get_cookie('username'));
            $data['events']= $this->Event_model->getSportEvents($cookie_decry);
            $this->load->view('templates/navbar');
            $this->load->view('event/myEvents',$data);
            $this->load->view('templates/footer');
        }
    }







}