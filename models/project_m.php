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
	
    function tampilProject(){
    	$this->db->select('*');
    	$this->db->from('ipro_project');
    	$this->db->where('status','pending');
    	return $this->db->get();
    }

    function cariProject($keyword){
        $this->db->select('*');
        $this->db->from('ipro_project');
        $this->db->where('status','pending');
        $this->db->like('title',$keyword);
        return $this->db->get();
    }

    function cariProjectPerPage($perPage,$uri,$keyword){
        $this->db->select('*');
        $this->db->from('ipro_project');
        $this->db->where('status','pending');
        $this->db->like('title',$keyword);
        $getData = $this->db->get('',$perPage, $uri);
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return null;
        }
    }

    function tampilProjectPerPage($perPage,$uri){
    	$this->db->select('*');
    	$this->db->from('ipro_project ip');
        $this->db->join('ipro_project_categories ipc','ipc.id = ip.category_id');
        $this->db->join('ipro_project_budget ipb','ipb.id = ip.budget_id');
        $this->db->where('status','pending');
        //$query = $this->db->query('SELECT * FROM default_ipro_project');
        /*('SELECT ip.title as title, ipc.title as category_id FROM default_ipro_project ip, default_ipro_project_categories ipc
            WHERE ip.category_id = ipc.id');*/
    	$getData = $this->db->get('',$perPage, $uri);
		if ($getData->num_rows() > 0) {
			return $getData->result();
		} else {
     		return null;
		}
        /*
            SELECT * 
            FROM ipro_project ip, ipro_project_category ipc, ipro_project_budget ipb
            WHERE ip.category_id = ipc.id AND ip.budget_id = ipb.id AND ip.status = pending
        */
    }

    function urutProjectPerPageTitle($perPage,$uri){
        $this->db->select('*');
        $this->db->from('ipro_project');
        $this->db->where('status','pending');
        $this->db->order_by('title');
        $getData = $this->db->get('',$perPage, $uri);
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return null;
        }
    }

    function urutProjectPerPageBudget($perPage,$uri){
        $this->db->select('*');
        $this->db->from('ipro_project');
        $this->db->where('status','pending');
        $this->db->order_by('budget_id');
        $getData = $this->db->get('',$perPage, $uri);
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return null;
        }
    }

    function urutProjectPerPageTimeLeft($perPage,$uri){
        $this->db->select('*');
        $this->db->from('ipro_project');
        $this->db->where('status','pending');
        $this->db->order_by('title');
        $getData = $this->db->get('',$perPage, $uri);
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return null;
        }
    }

    function simpanProject($data)
	{
		$this->db->insert('ipro_project', $data); 
	}

	function detailProject($id){
		$this->db->select('*');
    	$this->db->from('ipro_project');
    	$this->db->where('id',$id);
    	return $this->db->get();
	}

    function simpanTawaran($data)
    {
        $this->db->insert('ipro_project_bidder', $data); 
    }
}