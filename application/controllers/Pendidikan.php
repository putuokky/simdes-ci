<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pendidikan');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Pendidikan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Pendidikan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pendidikan';
		// isi table
		$d['namatable'] = 'Info Data Pendidikan';
		// link
		$d['content'] 	= 'content/referensi/pendidikan/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_pendidikan->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Pendidikan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Pendidikan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pendidikan';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/referensi/pendidikan/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $kode 		= $this->input->post('kode');
		$pendidikan		= $this->input->post('pendidikan');

		$data = array(
			// 'kode' 	=> $kode,
			'pendidikan' 		=> $pendidikan
			);

		$this->model_pendidikan->input_data('pendidikan',$data);
		redirect('referensi/pendidikan');
		
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Pendidikan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Pendidikan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Pendidikan';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/referensi/pendidikan/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_pendidikan->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode 		= $this->input->post('kode');
		$pendidikan	= $this->input->post('pendidikan');

		$data = array(
			'pendidikan' 		=> $pendidikan
			);
		
		$where = array('kode' => $kode);
		$this->model_pendidikan->edit_data('pendidikan',$data,$where);
		redirect('referensi/pendidikan');
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		$this->model_pendidikan->hapus_data($where,'pendidikan');
		redirect('referensi/pendidikan');
	}

}
