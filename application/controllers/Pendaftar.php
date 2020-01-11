<?php
defined('BASEPATH') OR exit('No direct script access allowes');

class Pendaftar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_smansa');
		$this->load->model('mdl_login');
	}
	
	public function index(){
		if ($this->mdl_login->logged_id()) {
			
			$tampil['daftaran']=$this->mdl_smansa->pendaftar();
			$this->load->view('admin/pendaftar',$tampil);
		}else{
		    echo '<script>
		 	alert("Anda Belum Login");
		 	document.location.href="'.base_url('adminlla').'";
		 	</script>';
		
		}
	}

	function hapus(){
		$id=$this->uri->segment(3);
		$file=$this->uri->segment(4);

		$this->mdl_smansa->hpsdaftar($id);
		unlink('assets/file/'.$file);
		$this->session->set_flashdata('sukses','Telah dihapus');
		redirect('pendaftar');
	}
}