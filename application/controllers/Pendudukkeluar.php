<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendudukkeluar extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pendkeluar');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Penduduk Keluar';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Penduduk Keluar';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Penduduk Keluar';
		// isi table
		$d['namatable'] = 'Info Penduduk Keluar';
		$d['namatable1'] = 'Data Penduduk';
		// link
		$d['content'] 	= 'content/kependudukan/pkeluar/tampildata';
		// tampil data dari database dengan table
		$d['tampil']			= $this->model_pendkeluar->tampil_data();
		$d['tampil_penduduk']	= $this->model_pendkeluar->tampil_penduduk("where status_penduduk = 'HIDUP'");
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function edit($nik)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Penduduk Keluar';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Penduduk Keluar';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Penduduk Keluar';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/kependudukan/pkeluar/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_pendkeluar->tampil_penduduk("where nik = '$nik'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$nosuratkeluar	= $this->input->post('nosuratkeluar');
		// $tgl_surat		= $this->input->post('tgl_surat');
		$tgl_surat = date("Y-m-d");
		$nik			= $this->input->post('nik');
		$nama			= $this->input->post('nama');
		$alamat			= $this->input->post('alamat');
		// $nosurat 		= $this->input->post('nosurat');
		$tglpindah		= $this->input->post('tglpindah');
		$alamattujuan	= $this->input->post('alamattujuan');
		$dusunbaru		= $this->input->post('dusunbaru');
		$keldesabaru	= $this->input->post('keldesabaru');
		$kecbaru		= $this->input->post('kecbaru');
		$kabkotabaru	= $this->input->post('kabkotabaru');
		$provbaru		= $this->input->post('provbaru');
		$keterangan		= $this->input->post('keterangan');
		$lingkungan		= $this->input->post('lingkungan');

		$data = array(
			// 'no_surat_keluar'	=> $nosuratkeluar,
			'tgl_surat' 		=> $tgl_surat,
			'nik' 				=> $nik,
			'nama' 				=> $nama,
			'alamat' 			=> $alamat,
			// 'no_surat'		 	=> $nosurat,
			'tgl_pindah' 		=> $tglpindah,
			'alamat_tujuan' 	=> $alamattujuan,
			'dusun_baru' 		=> $dusunbaru,
			'kelurahan_baru' 	=> $keldesabaru,
			'kecamatan_baru' 	=> $kecbaru,
			'kabkota_baru' 		=> $kabkotabaru,
			'provinsi_baru' 	=> $provbaru,
			'ket' 				=> $keterangan,
			'kodelingkungan'	=> $lingkungan
			);
		$this->model_pendkeluar->input_data('mutasi_keluar',$data);

		$where = array('nik' => $nik);
		
		if(!$this->model_pendkeluar->hapus_data($where,'penduduk')){
            $this->session->set_flashdata('pesan','Maaf Data Penduduk Keluar Tidak Bisa Ditambah');
            redirect('kependudukan/pendudukkeluar');
		}else{				
			$this->session->set_flashdata('pesan','Data Penduduk Keluar Berhasil Ditambah');
			redirect('kependudukan/pendudukkeluar');
		}
	}

	public function hapus($kode)
	{
		$where = array('no_surat_keluar' => $kode);
		
		if(!$this->model_pendkeluar->hapus_data($where,'mutasi_keluar')){
            $this->session->set_flashdata('pesan','Maaf Data Penduduk Keluar Tidak Bisa Ditambah');
            redirect('kependudukan/pendudukkeluar');
		}else{				
			$this->session->set_flashdata('pesan','Data Penduduk Keluar Berhasil Ditambah');
			redirect('kependudukan/pendudukkeluar');
		}
	}
}
