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
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'project/project/index';
		$config['total_rows'] = count($this->project_m->tampilProject()->result());
		$config['per_page'] = '1'; //maksimum row perhalaman
		$config['uri_segment'] = '4'; //pengaturan uri -alamat url
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$this->pagination->initialize($config);
		$data['project'] = $this->project_m->tampilProjectPerPage($config['per_page'],$this->uri->segment(4));
		$this->template->build('index',$data);
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
		if($this->input->post('nextTrial')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$this->template->build('tambahProjectTrial2',$data);
		}else if($this->input->post('cancel')){
			redirect('project/project/index');
		}
	}

	function tambahProjectKontes(){
		$this->template->build('tambahProjectKontes1');
	}

	function tambahProjectFiturKontes(){
		if($this->input->post('nextKontes')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$this->template->build('tambahProjectKontes2',$data);
		}else if($this->input->post('cancel')){
			redirect('project/project/index');
		}
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

	function verifikasiProjectTrial(){
		if($this->input->post('nextVerifikasi')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$this->template->build('verifikasiProjectTrial',$data);
		}else if($this->input->post('backTrial')){
			redirect('project/project/tambahProjectTrial');
		}
	}

	function verifikasiProjectKontes(){
		if($this->input->post('nextVerifikasi')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$this->template->build('verifikasiProjectKontes',$data);
		}else if($this->input->post('backKontes')){
			redirect('project/project/tambahProjectKontes');
		}
	}

	function detailProject($id){
		$data['project'] = $this->project_m->detailProject($id)->result();
		$this->template->build('detailProject',$data);
	}

	function biddingProject($id){
		$data['project'] = $this->project_m->detailProject($id)->result();
		$this->template->build('biddingProject',$data);
	}

	function simpanTawaran(){
		$data['offer_budget'] = $this->input->post('tawaran');
		$data['id_user'] = $this->input->post('id_user');
		$data['id_project'] = $this->input->post('id_project');
		$this->project_m->simpanTawaran($data);
		redirect('project/project/index');
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
			$data['type'] = $this->input->post('type');
			$data['budget_id'] = $this->input->post('budget');
			if($this->project_m->simpanProject($data)){
				print_r("Ada Kesalahan, periksa kembali data project");
			}else{
				redirect('project/project/index');
			}
		}else if($this->input->post('backTambah')){
			redirect('project/project/tambahProject');
		}else if($this->input->post('backTambahTrial')){
			redirect('project/project/tambahProjectTrial');
		}else if($this->input->post('backTambahKontes')){
			redirect('project/project/tambahProjectKontes');
		}
	}
}