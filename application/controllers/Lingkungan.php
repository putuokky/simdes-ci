<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lingkungan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_lingkungan');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Lingkungan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Lingkungan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Lingkungan';
		// isi table
		$d['namatable'] = 'Info Data Lingkungan';
		// link
		$d['content'] 	= 'content/referensi/lingkungan/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_lingkungan->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Lingkungan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Lingkungan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Lingkungan';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/referensi/lingkungan/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $kode 		= $this->input->post('kode');
		$lingkungan		= $this->input->post('lingkungan');
		$status_ling	= $this->input->post('status_ling');

		$data = array(
			// 'kode' 				=> $kode,
			'lingkungan' 			=> $lingkungan,
			'status_lingkungan'		=> $status_ling
			);

		
		if(!$this->model_lingkungan->input_data('lingkungan',$data)){
            $this->session->set_flashdata('pesan','Maaf Data Lingkungan Tidak Bisa Ditambah');
           redirect('referensi/lingkungan');
		}else{				
			$this->session->set_flashdata('pesan','Data Lingkungan Berhasil Ditambah');
			redirect('referensi/lingkungan');
		}
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Lingkungan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Lingkungan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Referensi';
		$d['subjudul'] 	= 'Lingkungan';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/referensi/lingkungan/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_lingkungan->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode 			= $this->input->post('kode');
		$lingkungan		= $this->input->post('lingkungan');
		$status_ling	= $this->input->post('status_ling');

		$data = array(
			'lingkungan' 			=> $lingkungan,
			'status_lingkungan' 	=> $status_ling
			);
		
		$where = array('kode' => $kode);
		
		if(!$this->model_lingkungan->edit_data('lingkungan',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data Lingkungan Tidak Bisa Diedit');
           redirect('referensi/lingkungan');
		}else{				
			$this->session->set_flashdata('pesan','Data Lingkungan Berhasil Diedit');
			redirect('referensi/lingkungan');
		}
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		
		if(!$this->model_lingkungan->hapus_data($where,'lingkungan')){
            $this->session->set_flashdata('pesan','Maaf Data Lingkungan Tidak Bisa Dihapus');
           redirect('referensi/lingkungan');
		}else{				
			$this->session->set_flashdata('pesan','Data Lingkungan Berhasil Dihapus');
			redirect('referensi/lingkungan');
		}
	}

}
