<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_home');
        $this->load->helper('url');
	}

	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Dashboard';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Dashboard';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Dashboard';
		$d['subjudul'] 	= '';
		// isi table
		// $d['namatable'] = 'Info Data Lingkungan';
		// link
		$d['content'] 	= 'include/dashboard';
		// tampil data dari database dengan table
		$d['jumlah_penduduk'] = $this->model_home->hitung_penduduk();
		$d['jumlah_kk'] = $this->model_home->hitung_kk();							
		$d['jumlah_kelahiran'] = $this->model_home->hitung_kelahiran();						
		$d['jumlah_kematian'] = $this->model_home->hitung_kematian();						
		$d['jumlah_mutasimasuk'] = $this->model_home->hitung_mutasimasuk();						
		$d['jumlah_mutasikeluar'] = $this->model_home->hitung_mutasikeluar();						
		// menampilkan halaman website
		$this->load->view('template',$d);
	}
}

