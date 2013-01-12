<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*ini adalah kelas yang digunakan untuk melakukan aktivitas yang berhubungan dengan project,
seperti posting project, melihat project, mengubah project, mencari project*/

class Project extends Public_Controller{

	public $namaProject;

	function __construct() {
        parent::__construct();
        $this->load->model('project_m','',TRUE);
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
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
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
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
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

	function simpanProject(){
		if($this->input->post('okSimpan')){
			$data['title'] = $this->input->post('namaProject');
			$data['category_id'] = $this->input->post('kategori');
			$data['body'] = $this->input->post('deskripsi');
			$data['slug'] = $this->input->post('namaProject');
			$this->project_m->simpanProject($data);
			redirect('project/project/index');
		}else if($this->input->post('backTambah')){
			redirect('project/project/tambahProject');
		}
	}
}