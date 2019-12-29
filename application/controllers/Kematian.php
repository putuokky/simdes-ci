<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kematian');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Kematian';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Kematian';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Master';
		$d['subjudul'] 	= 'Kematian';
		// isi table
		$d['namatable'] = 'Info Kematian';
		$d['namatable1'] = 'Data Kematian';
		// link
		$d['content'] 	= 'content/kependudukan/kematian/tampildata';
		// tampil data dari database dengan table
		$d['tampil']			= $this->model_kematian->tampil_data();
		$d['tampil_penduduk']	= $this->model_kematian->tampil_penduduk("where status_penduduk = 'HIDUP'");
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function edit($nik)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Kematian';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Kematian';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Master';
		$d['subjudul'] 	= 'Kematian';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/kependudukan/kematian/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_kematian->tampil_penduduk("where nik = '$nik'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$nik			= $this->input->post('nik');
		$nama			= $this->input->post('nama');
		$alamat			= $this->input->post('alamat');
		$alamat			= $this->input->post('alamat');
		$lingkungan		= $this->input->post('lingkungan');
		// $no_surat_mati	= $this->input->post('no_surat_mati');
		// $tgl_surat		= $this->input->post('tgl_surat');
		$tgl_surat = date("Y-m-d");
		$tempat_mati	= $this->input->post('tempat_mati');
		$tgl_mati		= $this->input->post('tgl_mati');
		$penyebab		= $this->input->post('penyebab');

		$data = array(
			'no_surat_kematian'	=> $no_surat_mati,
			'tgl_surat' 		=> $tgl_surat,
			'nik' 				=> $nik,
			'nama' 				=> $nama,
			'alamat' 			=> $alamat,
			'kodelingkungan'	=> $lingkungan,
			'tempat_meninggal' 	=> $tempat_mati,
			'tgl_meninggal' 	=> $tgl_mati,
			'penyebab' 			=> $penyebab
			);
		
		$this->model_kematian->input_data('kematian',$data);

		// untuk menambahkan status di penduduk "MATI" dan hapus no KK
		$statuskeluarga = "";
		$statuspenduduk = "MATI";
		$no_kk = "";

		$data = array(
			'status_penduduk'	=> $statuspenduduk,
			'status_keluarga'	=> $statuskeluarga,
			'no_kk'				=> $no_kk	
			);
		$where = array('nik' => $nik);
		
		if(!$this->model_kematian->edit_data('penduduk',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data Kematian Tidak Bisa Ditambah');
            redirect('kependudukan/kematian');
		}else{				
			$this->session->set_flashdata('pesan','Data Kematian Berhasil Ditambah');
			redirect('kependudukan/kematian');
		}
	}

	public function hapus($kode)
	{
		$where = array('no_surat_kematian' => $kode);
		
		if(!$this->model_kematian->hapus_data($where,'kematian')){
            $this->session->set_flashdata('pesan','Maaf Data Kematian Tidak Bisa Ditambah');
            redirect('kependudukan/kematian');
		}else{				
			$this->session->set_flashdata('pesan','Data Kematian Berhasil Ditambah');
			redirect('kependudukan/kematian');
		}
	}
}
