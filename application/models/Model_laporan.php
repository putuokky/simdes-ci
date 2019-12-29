<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {
	public function getDataLaporan($tglMulai, $tglAkhir){
		$query = '
			SELECT
				l.lingkungan,
				(SELECT COUNT(*) FROM kelahiran WHERE kodelingkungan = l.kode AND tgl_lahir BETWEEN "'.$tglMulai.'" AND "'.$tglAkhir.'") AS kelahiran,
				(SELECT COUNT(*) FROM kematian WHERE kodelingkungan = l.kode AND tgl_meninggal BETWEEN "'.$tglMulai.'" AND "'.$tglAkhir.'") AS kematian,
				(SELECT COUNT(*) FROM mutasi_keluar WHERE kodelingkungan = l.kode AND tgl_pindah BETWEEN "'.$tglMulai.'" AND "'.$tglAkhir.'") AS mutasi_keluar,
				(SELECT COUNT(*) FROM mutasi_masuk WHERE kodelingkungan = l.kode AND tgl_datang BETWEEN "'.$tglMulai.'" AND "'.$tglAkhir.'") AS mutasi_masuk
			FROM
				lingkungan AS l;
		';
		
		$sql = $this->db->query($query);
		return $sql->result();
	}

	public function penandaTangan($ttdPejabat){
		$this->db->where(array('jabatan' => $ttdPejabat));
		$sql = $this->db->get('penanda_tangan');
		return $sql->row();
	}
}
