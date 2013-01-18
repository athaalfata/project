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
		$config['per_page'] = '10'; //maksimum row perhalaman
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

	// function cekSubmit(){
	// 	if($this->input->post('regular')){
	// 		redirect('project/project/tambahProject');
	// 	}else if($this->input->post('trial')){
	// 		redirect('project/project/tambahProjectTrial');
	// 	}else if($this->input->post('kontes')){
	// 		redirect('project/project/tambahProjectKontes');
	// 	}
	// }

	function tambahProject(){
		$this->template->append_js('module::formToWizard.js');
		$this->template->build('addProject');
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
		$this->template->build('addProjectTrial');
	}

	// function tambahProjectFiturTrial(){
	// 	if($this->input->post('nextTrial')){
	// 		$data['namaProject'] = $this->input->post('namaProject');
	// 		$data['kategori'] = $this->input->post('kategori');
	// 		$data['deskripsi'] = $this->input->post('deskripsi');
	// 		$data['budget'] = $this->input->post('budget');
	// 		$this->template->build('tambahProjectTrial2',$data);
	// 	}else if($this->input->post('cancel')){
	// 		redirect('project/project/index');
	// 	}
	// }

	function tambahProjectKontes(){
		$this->template->build('addProjectKontes');
	}

	// function tambahProjectFiturKontes(){
	// 	if($this->input->post('nextKontes')){
	// 		$data['namaProject'] = $this->input->post('namaProject');
	// 		$data['kategori'] = $this->input->post('kategori');
	// 		$data['deskripsi'] = $this->input->post('deskripsi');
	// 		$data['budget'] = $this->input->post('budget');
	// 		$this->template->build('tambahProjectKontes2',$data);
	// 	}else if($this->input->post('cancel')){
	// 		redirect('project/project/index');
	// 	}
	// }

	function verifikasiProject(){
		if($this->input->post('buatProject')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$data['skill'] = $this->input->post('skill');
			$data['FiturProject'] = $this->input->post('FiturProject');
			$data['ProjectUrgent'] = $this->input->post('ProjectUrgent');
			$data['HiddenProject'] = $this->input->post('HiddenProject');
			$data['ProjectKomisi'] = $this->input->post('ProjectKomisi');
			$data['NonDisclosureAgreement'] = $this->input->post('NonDisclosureAgreement');
			$data['OfflineOnline'] = $this->input->post('OfflineOnline');
			$data['VerifikasiUser'] = $this->input->post('VerifikasiUser');
			$this->template->build('verifikasiProject',$data);
		}
	}

	function verifikasiProjectTrial(){
		if($this->input->post('buatProjectTrial')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['budget'] = $this->input->post('budget');
			$data['skill'] = $this->input->post('skill');
			$data['FiturProject'] = $this->input->post('FiturProject');
			$data['ProjectUrgent'] = $this->input->post('ProjectUrgent');
			$data['HiddenProject'] = $this->input->post('HiddenProject');
			$data['ProjectKomisi'] = $this->input->post('ProjectKomisi');
			$data['NonDisclosureAgreement'] = $this->input->post('NonDisclosureAgreement');
			$data['OfflineOnline'] = $this->input->post('OfflineOnline');
			$data['VerifikasiUser'] = $this->input->post('VerifikasiUser');
			$this->template->build('verifikasiProjectTrial',$data);
		}
		// else if($this->input->post('backTrial')){
		// 	redirect('project/project/tambahProjectTrial');
		// }
	}

	function verifikasiProjectKontes(){
		if($this->input->post('buatProjectKontes')){
			$data['namaProject'] = $this->input->post('namaProject');
			$data['kategori'] = $this->input->post('kategori');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['hadiah'] = $this->input->post('hadiah');
			$data['skill'] = $this->input->post('skill');
			$data['FiturProject'] = $this->input->post('FiturProject');
			$data['ProjectUrgent'] = $this->input->post('ProjectUrgent');
			$data['HiddenProject'] = $this->input->post('HiddenProject');
			$data['ProjectKomisi'] = $this->input->post('ProjectKomisi');
			$data['NonDisclosureAgreement'] = $this->input->post('NonDisclosureAgreement');
			$data['OfflineOnline'] = $this->input->post('OfflineOnline');
			$data['VerifikasiUser'] = $this->input->post('VerifikasiUser');
			$this->template->build('verifikasiProjectKontes',$data);
		}
		// else if($this->input->post('backKontes')){
		// 	redirect('project/project/tambahProjectKontes');
		// }
	}

	function detailProject($id){
		$data['project'] = $this->project_m->detailProject($id)->result();
		$this->template->build('detailProject',$data);
	}

	function biddingProject($id){
		$this->template->append_js('module::jquery.uploadprogress.0.3.js');
		$this->template->append_js('module::jquery.js');
		$this->template->append_js('module::vendor/jquery.ui.widget.js');
		$this->template->append_js('module::jquery.iframe-transport.js');
		$this->template->append_js('module::jquery.fileupload.js');
		$this->template->append_js('module::jquery.fileupload-fp.js');
		$this->template->append_js('module::jquery.fileupload-ui.js');
		$this->template->append_js('module::main.js');
		$this->template->append_js('module::bootstrap-image-gallery.min.js');
		$this->template->append_js('module::bootstrap.min.js');
		$this->template->append_js('module::canvas-to-blob.min.js');
		$this->template->append_js('module::load-image.min.js');
		$this->template->append_js('module::tmpl.min.js');
		$this->template->append_css('module::bootstrap-image-gallery.min.css');
		$this->template->append_css('module::bootstrap-responsive.min.css');
		$this->template->append_css('module::bootstrap.min.css');
		$this->template->append_css('module::style2.css');
		$this->template->append_css('module::jquery.fileupload-ui.css');
		$this->template->append_css('module::jquery.fileupload-ui-noscript.css');
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

	function cariProject(){
		$keyword = $this->input->post('keyword');
    	$this->load->library('pagination');
		$config['base_url'] = base_url() . 'project/project/index';
		$config['total_rows'] = count($this->project_m->cariProject($keyword)->result());
		$config['per_page'] = '10'; //maksimum row perhalaman
		$config['uri_segment'] = '4'; //pengaturan uri -alamat url
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$this->pagination->initialize($config);
		$data['project'] =  $this->project_m->cariProjectPerPage($config['per_page'],$this->uri->segment(4),$keyword);
		//print_r($data);
		$this->template->build('index',$data);
	}

	public function urutProject(){
    	$sortKey = $this->input->post('sortKey');
    	if($sortKey == 1){
	    	redirect('projects/UrutProjectTitle');
		}else if($sortKey == 2){
			redirect('projects/UrutProjectBudget');
		}
    }

	public function urutProjectTitle(){
    	$this->load->library('pagination');
		$config['base_url'] = base_url() . 'project/project/index';
		$config['total_rows'] = count($this->project_m->tampilProject()->result());
		$config['per_page'] = '10'; //maksimum row perhalaman
		$config['uri_segment'] = '4'; //pengaturan uri -alamat url
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$this->pagination->initialize($config);
		$data['project'] =  $this->project_m->urutProjectPerPageTitle($config['per_page'],$this->uri->segment(4));
		//print_r($data);
		$this->template->build('index',$data);
    }

    public function urutProjectBudget(){
    	$this->load->library('pagination');
		$config['base_url'] = base_url() . 'project/project/index';
		$config['total_rows'] = count($this->project_m->tampilProject()->result());
		$config['per_page'] = '10'; //maksimum row perhalaman
		$config['uri_segment'] = '4'; //pengaturan uri -alamat url
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$this->pagination->initialize($config);
		$data['project'] =  $this->project_m->urutProjectPerPageBudget($config['per_page'],$this->uri->segment(4));
		//print_r($data);
		$this->template->build('index',$data);
    }

    public function urutProjectTimeLeft(){
    	$this->load->library('pagination');
		$config['base_url'] = base_url() . 'project/project/index';
		$config['total_rows'] = count($this->project_m->tampilProject()->result());
		$config['per_page'] = '10'; //maksimum row perhalaman
		$config['uri_segment'] = '4'; //pengaturan uri -alamat url
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$this->pagination->initialize($config);
		$data['project'] =  $this->project_m->urutProjectPerPageTimeLeft($config['per_page'],$this->uri->segment(4));
		//print_r($data);
		$this->template->build('index',$data);
    }
}