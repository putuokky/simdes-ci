<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	function hitung_penduduk(){
		$hasil = 'SELECT * FROM penduduk WHERE status_penduduk = "HIDUP"';
		$sql = $this->db->query($hasil);
		if($sql->num_rows() > 0){
			return $sql->num_rows();
		}else{
			return $sql->num_rows();
		}
	}

	function hitung_kk(){
		$query = 'SELECT * FROM penduduk WHERE status_no_kk = "ADA" AND status_keluarga = "KEPALA KELUARGA"';
		$sql = $this->db->query($query);
		if($sql->num_rows() > 0){
			return $sql->num_rows();
		}else{
			return $sql->num_rows();
		}
	}

	function hitung_kelahiran(){
		$hasil = $this->db->get('kelahiran');
		if($hasil->num_rows() > 0){
			return $hasil->num_rows();
		}else{
			return $hasil->num_rows();
		}
	}
	function hitung_kematian(){
		$hasil = $this->db->get('kematian');
		if($hasil->num_rows() > 0){
			return $hasil->num_rows();
		}else{
			return $hasil->num_rows();
		}
	}

	function hitung_mutasimasuk(){
		$hasil = $this->db->get('mutasi_masuk');
		if($hasil->num_rows() > 0){
			return $hasil->num_rows();
		}else{
			return $hasil->num_rows();
		}
	}

	function hitung_mutasikeluar(){
		$hasil = $this->db->get('mutasi_keluar');
		if($hasil->num_rows() > 0){
			return $hasil->num_rows();
		}else{
			return $hasil->num_rows();
		}
	}
}
