
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Participation_model extends CI_Model
{
    protected $users ='user';
    protected $participate = 'participate';

    public function __construct()
    {
        parent::__construct();

    }

    public function addParticipation($idEvent, $username)
    {


        $this->db->set('idEvent', $idEvent)
            ->set('idUserEvent', $username)
            ->insert($this->participate);

    }

    public function deleteParticipation($data)
    {
        $this->db->delete('*')
            ->from($this->participate)
            ->where('idUserEvent', $data['idUserEvent'])
            ->where('idEvent', $data['idEvent'])
            ->result();
    }


    public function getParticipations($username)
    {

        return $this->db->select('*')
            ->from($this->participate)
            ->where('idUserEvent', $username)
            ->get()
            ->result();
    }
}