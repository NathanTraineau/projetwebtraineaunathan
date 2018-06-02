<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

     protected $users ='user';

     public function __construct() {
        parent::__construct();

    }
    
    public function newUser($data) {
 	$this->db->set('username', $data['username'])
 	->set('password', $data['password'])
        ->set('firstname', $data['firstname'])
 	->set('lastname', $data['lastname'])
 	->set('fbpseudo', $data['fbpseudo'])
 	->set('phoneNumber', $data['phoneNumber'])
 	->insert($this->users);

}


    public function verifyPassword($data) {

         $this->db->where('username',$data["username"]);
         $account = $this->db->get('user')->row();
         if($account != NULL ){
             if( password_verify($data['password'], $account->password)){
                 return true;
             }
             else return false;
         }
         return false;


    }


    public function getInfosUser($username){

        return  $this->db->select('*')
            ->from($this->users)
            ->where('user.username',$username)
            ->get()
            ->result();

    }







}