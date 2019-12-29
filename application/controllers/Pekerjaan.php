<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pekerjaan');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Pekerjaan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Pekerjaan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pekerjaan';
		// isi table
		$d['namatable'] = 'Info Data Pekerjaan';
		// link
		$d['content'] 	= 'content/referensi/pekerjaan/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_pekerjaan->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Pekerjaan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Pekerjaan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pekerjaan';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/referensi/pekerjaan/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $kode 		= $this->input->post('kode');
		$pekerjaan		= $this->input->post('pekerjaan');

		$data = array(
			// 'kode' 		=> $kode,
			'pekerjaan' 	=> $pekerjaan
			);

		$this->model_pekerjaan->input_data('pekerjaan',$data);
		redirect('referensi/pekerjaan');
		
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Pekerjaan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Pekerjaan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pekerjaan';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/referensi/pekerjaan/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_pekerjaan->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode 		= $this->input->post('kode');
		$pekerjaan	= $this->input->post('pekerjaan');

		$data = array(
			'pekerjaan' 	=> $pekerjaan
			);
		
		$where = array('kode' => $kode);
		$this->model_pekerjaan->edit_data('pekerjaan',$data,$where);
		redirect('referensi/pekerjaan');
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		$this->model_pekerjaan->hapus_data($where,'pekerjaan');
		redirect('referensi/pekerjaan');
	}

}
