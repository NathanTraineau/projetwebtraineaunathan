
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 29/05/2018
 * Time: 00:04
 */

class Dashboard_model extends CI_Model
{

    protected $table = 'user';

    public function __construct()
    {
        parent::__construct();

    }
}

