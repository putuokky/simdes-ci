<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// security
		$this->model_security->securitykeluar();
		$d['title'] 	= 'SIMDES SESETAN';
		$d['subtitle'] 	= 'Sign In';
		$d['judul']		= 'SIMDES SESETAN';
		$this->load->view('formlogin',$d);
	}

	public function masuk()
	{
		$user = $this->input->post('username');
		$pasw = $this->input->post('password');
		// $this->load->model('model_login');
		// $this->model_login->getlogin($user,$pasw);

		$this->load->model('model_login');
		$data['valid_user'] = $this->model_login->cek_kredensial($user,$pasw);
																			
		if($data['valid_user'] == FALSE){
            $this->session->set_flashdata('pesan','Maaf Username atau Password Salah');
            redirect('login');
		}else{									
			$this->session->set_userdata('nip', $data['valid_user']->nip);
			$this->session->set_userdata('nama', $data['valid_user']->nama);
			$this->session->set_userdata('username', $data['valid_user']->username);
			$this->session->set_userdata('level', $data['valid_user']->level);
			
			switch ($data['valid_user']->level) {
				case 'Admin':
					redirect('home');
					break;
				case 'Pegawai':
					redirect('home');
					break;
				case 'Kepala Lurah':
					redirect('home');
					break;
				default:
					break;
			}
		}

	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
