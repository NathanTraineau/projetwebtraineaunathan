
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainings_model extends CI_Model
{

    protected $trainings = 'trainings';

    public function __construct()
    {
        parent::__construct();

    }

    public function newTraining($data)
    {
        $this->db
            ->set('nameTraining', $data['nameTraining'])
            ->set('descriptionTraining', $data['descriptionTraining'])
            ->insert($this->trainings);

    }

    public function deleteTraining($nameTraining)
    {

        $this->db->where('nameTraining',$nameTraining);
        $this->db->delete('trainings');
    }


    public function getAllTrainings()
    {
        return $this->db->select('*')
            ->from($this->trainings)
            ->get()
            ->result();
    }
}