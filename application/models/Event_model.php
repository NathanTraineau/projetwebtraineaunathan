
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model
{

    protected $sportevents = 'sportevents';
    protected $participate = 'participate';


    public function __construct()
    {
        parent::__construct();

    }

    public function newSportEvent($data)
    {
         $this->db->set('nameEvent', $data['nameEvent'])
            ->set('placeEvent', $data['placeEvent'])
            ->set('dateEvent', $data['dateEvent'])
            ->set('descriptionEvent', $data['descriptionEvent'])
            ->set('nameTraining', $data['nameTraining'])
            ->insert($this->sportevents);


    }

    public function deleteSportEvent($idEvent)
    {

        $this->db->where('idEvent',$idEvent);
        $this->db->delete('sportevents');
    }

    public function getSportEvents(){


          $this->db->select('*')
            ->from($this->sportevents);
          $this->db->order_by("dateEvent");
          $query = $this->db->get();
          return $query->result();


    }



}