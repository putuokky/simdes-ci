<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartukeluarga extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kk');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data KK';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data KK';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Master';
		$d['subjudul'] 	= 'KK';
		// isi table
		$d['namatable'] = 'Info Kartu Keluarga';
		// link
		$d['content'] 	= 'content/kependudukan/kk/tampildata';
		// tampil data dari database dengan table
		$d['tampil_kk']	= $this->model_kk->tampil_data("where status_keluarga = 'KEPALA KELUARGA' && status_penduduk = 'HIDUP' && status_no_kk = 'ADA'");
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function hapus($kode)
	{
		$where = array('nik' => $kode);
		$this->model_penduduk->hapus_data($where,'penduduk');
		redirect('kependudukan/penduduk');
	}

	public function detail($no_kk)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Kartu Keluarga';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Kartu Keluarga';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Master';
		$d['subjudul'] 	= 'KK';
		// isi table
		$d['namatable'] = 'Info Kartu Keluarga';
		// link
		$d['content'] 	= 'content/kependudukan/kk/detail';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_kk->tampil_data("where status_no_kk = 'ADA' && no_kk = '$no_kk' ORDER BY status_keluarga ASC");
		$d['tampilnokk'] = $no_kk;
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

}
