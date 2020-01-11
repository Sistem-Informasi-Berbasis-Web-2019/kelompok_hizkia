<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_smansa extends CI_Model{
	
	// Pendaftaran
	function upload(){
		$nama_file = $_FILES['data_file']['name'];
		$string = preg_replace("/[^a-zA-Z0-9.]/", " ", $nama_file);
		$trim  = trim($string);
		$judul = strtolower(str_replace(' ', '', $trim));

		$config['upload_path'] = './assets/file/';
		$config['allowed_types'] = 'rar|zip|pdf|doc|docx';
		$config['max_size'] = '51200';
		$config['remove_space'] = TRUE;
		$config['file_name'] = $judul;

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('data_file')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// jika gagal
			$return = array('result' =>'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function daftar($upload){
		$nama_file = $upload['file']['file_name'];
		$string = preg_replace("/[^a-zA-Z0-9.]/", " ", $nama_file);
		$trim = trim($string);
		$judul = strtolower(str_replace(' ', '', $trim));

		$data = array(
			'nama_pembina' => $this->input->post('nama_pembina'),
			'no_pembina' => $this->input->post('no_pembina'),
			'nama_pangkalan' => $this->input->post('nama_pangkalan'),
			'gugus_depan' => $this->input->post('gugus_depan'),
			'alamat_gugus' => $this->input->post('alamat_gugus'),
			'file' => $judul
		);
		$this->db->insert('pendaftar',$data);
	}
	
	// Dashboard
	function showdaftar(){
		return $this->db->query('SELECT count(id) as jumlah FROM pendaftar')->result();
	}

	function showgaleri(){
		return $this->db->query('SELECT count(id) as galeri FROM galeri')->result();
	}

	function showadmin(){
		return $this->db->query('SELECT count(id) as admin FROM admin')->result();
	}

	// Pendaftaran
	function pendaftar(){
		$this->db->order_by('id','desc');
		return $this->db->get('pendaftar')->result();
	}

	function hpsdaftar($id){
		$this->db->where('id',$id);
		return $this->db->delete('pendaftar');
	}

	// Galeri
	function image(){
		$nama_file = $_FILES['gambar']['name'];
		$string = preg_replace("/[^a-zA-Z0-9.]/", " ", $nama_file);
		$trim  = trim($string);
		$judul = strtolower(str_replace(' ', '', $trim));

		$config['upload_path'] = './assets/galeri/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '51200';
		$config['remove_space'] = TRUE;
		$config['file_name'] = $judul;

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('gambar')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// jika gagal
			$return = array('result' =>'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function addimage($upload){
		$nama_file = $upload['file']['file_name'];
		$string = preg_replace("/[^a-zA-Z0-9.]/", " ", $nama_file);
		$trim = trim($string);
		$judul = strtolower(str_replace(' ', '', $trim));

		$data = array(
			'judul' => $this->input->post('judul'),
			'gambar' => $judul
		);
		$this->db->insert('galeri',$data);
	}

	function gambar(){
		$this->db->order_by('id','desc');
		return $this->db->get('galeri')->result();	
	}

	function hpsgaleri($id){
		$this->db->where('id',$id);
		return $this->db->delete('galeri');
	}

	// admin/User
	function adduser($data){
		return $this->db->insert('admin',$data);
	}

	function tampiladmin(){
		return $this->db->get('admin')->result();
	}
}