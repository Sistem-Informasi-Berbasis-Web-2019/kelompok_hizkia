<?php
defined('BASEPATH') OR exit('No direct script access allowes');

class Galeri extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_smansa');
		$this->load->model('mdl_login');
	}
	
	public function index(){
		if ($this->mdl_login->logged_id()) {		
			$tampil['image']=$this->mdl_smansa->gambar();
			$this->load->view('admin/galeri',$tampil);
		}else{
		 	echo '<script>
		 	alert("Anda Belum Login");
		 	document.location.href="'.base_url('adminlla').'";
		 	</script>';
		 	
		}
	}

	function tambah(){
		$data = array();

		if ($this->input->post('submit')) {
			$upload = $this->mdl_smansa->image();
			if ($upload['result'] == 'success') {
				$this->mdl_smansa->addimage($upload);
				$this->session->set_flashdata('berhasil', 'upload Gambar Berhasil');
				redirect('Galeri');
			}else{
				$data['message'] = $upload['error'];
				$this->session->set_flashdata('gagal','Upload Gambar gagal');
			}
		}
		redirect('Galeri',$data);
	}

	function hapus(){
		$id=$this->uri->segment(3);
		$gambar=$this->uri->segment(4);

		$this->mdl_smansa->hpsgaleri($id);
		unlink('assets/galeri/'.$gambar);
		$this->session->set_flashdata('sukses','Gambar Telah dihapus');
		redirect('galeri');
	}

}