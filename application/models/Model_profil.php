<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model {

	function tampil_data($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from login '.$where);
		return $res->result_array();
	}

	public function select_user($nip){
		$hasil = $this->db->where('username',$nip)->get('login');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

	function edit_data($table,$data,$where) {
		return $this->db->update($table,$data,$where);
	}
}
