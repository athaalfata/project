<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*ini adalah kelas yang digunakan untuk melakukan aktivitas yang berhubungan dengan project,
seperti posting project, melihat project, mengubah project, mencari project*/

class Project extends Public_Controller{

	public $namaProject;

	function __construct() {
        parent::__construct();
	}

	/* fungsi index untuk menampilkan project secara default */
	function index(){
		$this->template->build('index');
	}

	function pilihTypeProject(){
		$this->template->build('pilihTypeProject');
	}

	function cekSubmit(){
		if($this->input->post('regular')){
			redirect('project/project/tambahProject');
		}else if($this->input->post('trial')){
			redirect('project/project/tambahProjectTrial');
		}else if($this->input->post('kontes')){
			redirect('project/project/tambahProjectKontes');
		}
	}

	function tambahProject(){
		$this->template->build('tambahProject1');
	}

	function tambahProjectFitur(){
		if($this->input->post('nextRegular')){
			$data['namaProject'] = $this->input->post('namaProject');
			$this->template->build('tambahProject2',$data);
		}else if($this->input->post('cancel')){
			redirect('project/project/index');
		}
	}

	function tambahProjectTrial(){
		$this->template->build('tambahProjectTrial1');
	}

	function tambahProjectFiturTrial(){
		$this->template->build('tambahProjectTrial2');
	}

	function tambahProjectKontes(){
		$this->template->build('tambahProjectKontes1');
	}

	function tambahProjectFiturKontes(){
		$this->template->build('tambahProjectKontes2');
	}

	function verifikasiProject(){
		if($this->input->post('nextVerifikasi')){
			$data['namaProject'] = $this->input->post('namaProject');
			$this->template->build('verifikasiProject',$data);
		}else if($this->input->post('backRegular')){
			redirect('project/project/tambahProject');
		}
	}

	function detailProject(){
		$this->template->build('detailProject');
	}

	function biddingProject(){
		$this->template->build('biddingProject');
	}

	function detailProjectForSelection(){
		$this->template->build('detailProjectForSelection');
	}
}