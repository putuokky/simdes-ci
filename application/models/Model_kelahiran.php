<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelahiran extends CI_Model {

	function tampil_data($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from kelahiran '.$where);
		return $res->result_array();
	}

	function tampil_agama($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from agama '.$where);
		return $res->result_array();
	}

	function tampil_pendidikan($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from pendidikan '.$where);
		return $res->result_array();
	}

	function tampil_pekerjaan($where="") {
		// menampilkan data dari table pekerjaan
		$res =  $this->db->query('select * from pekerjaan '.$where);
		return $res->result_array();
	}

	function tampil_lingkungan($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from lingkungan '.$where);
		return $res->result_array();
	}

	function tampil_penduduk($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from penduduk '.$where);
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
