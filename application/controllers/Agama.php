<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_agama');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Agama';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Agama';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Agama';
		// isi table
		$d['namatable'] = 'Info Data Agama';
		// link
		$d['content'] 	= 'content/referensi/agama/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_agama->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Agama';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Agama';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Agama';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/referensi/agama/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $kode 		= $this->input->post('kode');
		$agama		= $this->input->post('agama');

		$data = array(
			// 'kode' 	=> $kode,
			'agama' 	=> $agama
			);

		$this->model_agama->input_data('agama',$data);
		redirect('referensi/agama');
		
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Agama';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Agama';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Agama';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/referensi/agama/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_agama->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode 	= $this->input->post('kode');
		$agama	= $this->input->post('agama');

		$data = array(
			'agama' 	=> $agama
			);
		
		$where = array('kode' => $kode);
		$this->model_agama->edit_data('agama',$data,$where);
		redirect('referensi/agama');
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		$this->model_agama->hapus_data($where,'agama');
		redirect('referensi/agama');
	}

}
