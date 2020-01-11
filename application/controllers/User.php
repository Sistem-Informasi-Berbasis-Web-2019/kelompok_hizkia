<?php
defined('BASEPATH') OR exit('No direct script access allowes');

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_smansa');
		$this->load->model('mdl_login');
	}
	
	public function index(){
		if ($this->mdl_login->logged_id()) {
			$tampil['user']=$this->mdl_smansa->tampiladmin();
			$this->load->view('admin/admin',$tampil);
		}else{
			echo '<script>
		 	alert("Anda Belum Login");
		 	document.location.href="'.base_url('adminlla').'";
		 	</script>';
		 }
	}

	function tambah(){
		$data = array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->mdl_smansa->adduser($data);
		$this->session->set_flashdata('berhasil','Tambah Admin Berhasil');
		redirect('user');
	}

	function hapus(){
		$id = $this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('admin');
		redirect('user');
	}
}