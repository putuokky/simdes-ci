<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penandatangan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_penandatangan');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Penanda Tangan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Penanda Tangan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Penanda Tangan';
		// isi table
		$d['namatable'] = 'Info Data Penanda Tangan';
		// link
		$d['content'] 	= 'content/referensi/penandatangan/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_penandatangan->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Penanda Tangan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Penanda Tangan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Penanda Tangan';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/referensi/penandatangan/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		$nip 		= $this->input->post('nip');
		$nama		= $this->input->post('nama');
		$jabatan	= $this->input->post('jabatan');

		$data = array(
			'nip' 		=> $nip,
			'nama' 		=> $nama,
			'jabatan'	=> $jabatan
			);

		$this->model_penandatangan->input_data('penanda_tangan',$data);
		redirect('referensi/penandatangan');
		
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Penanda Tangan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Penanda Tangan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Penanda Tangan';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/referensi/penandatangan/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_penandatangan->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$nip 		= $this->input->post('nip');
		$kode 		= $this->input->post('kode');
		$nama		= $this->input->post('nama');
		$jabatan	= $this->input->post('jabatan');

		$data = array(
			'nip' 		=> $nip,
			'nama' 		=> $nama,
			'jabatan'	=> $jabatan
			);
		
		$where = array('kode' => $kode);
		$this->model_penandatangan->edit_data('penanda_tangan',$data,$where);
		redirect('referensi/penandatangan');
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		$this->model_penandatangan->hapus_data($where,'penanda_tangan');
		redirect('referensi/penandatangan');
	}

}
