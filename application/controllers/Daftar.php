<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_smansa');
	}

	public function index(){
		$this->load->view('daftar');
	}

	function pendaftaran(){
		$data = array();

		if ($this->input->post('submit')) {
			$upload = $this->mdl_smansa->upload();
			if ($upload['result'] == 'success') {
				$this->mdl_smansa->daftar($upload);
				$this->session->set_flashdata('berhasil', 'Terima Kasih telah mendaftar:) Salam Pramuka');
				redirect('Daftar');
			}else{
				$data['message'] = $upload['error'];
				$this->session->set_flashdata('gagal','Mohon maaf gagal mendaftar, silahkan coba lagi');
			}
		}
		redirect('Daftar',$data);
	}
}
