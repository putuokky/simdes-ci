<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function getlogin($user,$pasw)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pasw);
		$query = $this->db->get('login');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$sess = array(
					'kode'		=> $row->kode,
					'nip'		=> $row->nip,
					'nama' 		=> $row->nama,
					'username' 	=> $row->username,
					'password' 	=> $row->password,
					'level'		=> $row->level
					);
				$this->session->set_userdata($sess);
				redirect('home');
			}
		} else {
			$this->session->set_flashdata('pesan','Maaf Username atau Password Salah');
			redirect('login');
		}
	}

	public function cek_kredensial($user,$pasw){
		$hasil = $this->db->where('username', $user)->where('password',$pasw)->get('login');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

	
}
