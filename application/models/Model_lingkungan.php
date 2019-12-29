<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lingkungan extends CI_Model {

	function tampil_data($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from lingkungan '.$where);
		return $res->result_array();
	}

	function input_data($table,$data) {
		return $this->db->insert($table,$data);
	}

	function edit_data($table,$data,$where) {
		return $this->db->update($table,$data,$where);
	}

	function hapus_data($where,$table) {
		return $this->db->where($where)->delete($table);
	}
}
