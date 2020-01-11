<?php
defined('BASEPATH') OR exit('No direct script access allowes');

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_smansa');
		$this->load->model('mdl_login');
	}
	
	public function index(){
		if ($this->mdl_login->logged_id()) {
			$tampil['daftar']=$this->mdl_smansa->showdaftar();
			$tampil['galeri']=$this->mdl_smansa->showgaleri();
			$tampil['admin']=$this->mdl_smansa->showadmin();
			$this->load->view('admin/index',$tampil);
		}else{
			echo '<script>
		 	alert("Anda Belum Login");
		 	document.location.href="'.base_url('adminlla').'";
		 	</script>';
		 	
		 }
	}
}