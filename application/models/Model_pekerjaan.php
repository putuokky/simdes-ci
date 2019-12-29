<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pekerjaan extends CI_Model {

	function tampil_data($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from pekerjaan '.$where);
		return $res->result_array();
	}

	function input_data($table,$data) {
		$this->db->insert($table,$data);
	}

	function edit_data($table,$data,$where) {
		return $this->db->update($table,$data,$where);
	}

	function hapus_data($where,$table) {
		$this->db->where($where);
		$this->db->delete($table);
	}
}
