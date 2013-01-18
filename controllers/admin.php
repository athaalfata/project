<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*ini adalah kelas yang digunakan untuk melakukan aktivitas yang berhubungan dengan project,
seperti posting project, melihat project, mengubah project, mencari project*/

class Admin extends Admin_Controller{

	function __construct() {
        parent::__construct();
        
	}

	/* fungsi index untuk menampilkan project secara default */
	function index(){
		$this->template->build('admin');
	}

}