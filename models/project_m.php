<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Project Model
 * 
 * @author Widianto Gilang Ramadhan
 *
 * 
 */
class project_m extends MY_Model
{
	function __construct() {
        parent::__construct();
    }
	
    function simpanProject($data)
	{
		$this->db->insert('ipro_project', $data); 
	}

}