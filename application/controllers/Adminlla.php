<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlla extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('mdl_login');
	}

	public function index(){
		if($this->mdl_login->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<script>alert("{field}");</script>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = md5($this->input->post('password', TRUE));
                //checking data via model
                $checking = $this->mdl_login->check_login('admin', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id'   => $apps->id,
                            'nama'   => $apps->nama,
                            'username' => $apps->username,
                            'password' => $apps->password,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('dashboard/');

                    }
                }else{

                    $data['error'] = '<script>alert("ERROR, username atau password salah");</script>';
                    $this->load->view('admin/login', $data);
                }

            }else{

                $this->load->view('admin/login');
            }

        }

    }

	

	function logout(){
		$this->session->sess_destroy();
		redirect('adminlla');
	}
}