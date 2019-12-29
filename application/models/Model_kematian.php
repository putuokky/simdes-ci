<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kematian extends CI_Model {

	function tampil_data($where="") {
		// menampilkan data dari table login
		$res =  $this->db->query('select * from kematian '.$where);
		return $res->result_array();
	}

	function tampil_penduduk($where="") {
		// menampilkan data dari table login
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->join('lingkungan', 'penduduk.kodelingkungan = lingkungan.kode '.$where);
		$query = $this->db->get();
		return $query->result_array();
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
