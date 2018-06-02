<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts_model extends CI_Model
{

    protected $users = 'user';
    protected $contacts = 'contacts';

    public function __construct()
    {
        parent::__construct();

    }

    public function getAllContacts($userUsername)
    {
        //model that get all of the contacts
        $contact1 =  $this->db->select('*')
            ->from($this->contacts)
            ->where('idUser2 =',$userUsername)
            ->get()
            ->result();
        $contact2 =  $this->db->select('*')
            ->from($this->contacts)
            ->where('idUser1 =',$userUsername)
            ->get()
            ->result();
        return $contact1 + $contact2;
        /*
        $query = $this->db->query('
            SELECT("*")
            FROM user ,contacts
            WHERE (contacts.idUser1 = ? or contacts.idUser2 = ?) 
            AND  (contacts.idUser1 = user.username or contacts.idUser2 = user.username)
            AND ( user.username != ?)
            ',array($username,$username,$username));
        return $query ->result_array();
        */

    }

    public function addContact($contact1,$contact2)
    {
        $this->db->set('idUser1', $contact1)
            ->set('idUser2', $contact2)
            ->insert($this->contacts);

    }

    public function deleteContact($contact1,$contact2)
    {

        $this->db->where('idUser2',$contact2);
        $this->db->where('idUser1',$contact1);
        $this->db->delete('contacts');

        $this->db->where('idUser2',$contact1);
        $this->db->where('idUser1',$contact2);
        $this->db->delete('contacts');


    }

    public function getAllUsers($userUsername){
    //return the users we are not in contact with

        return  $this->db->select('*')
            ->from($this->users)
            ->get()
            ->result();

    }
}