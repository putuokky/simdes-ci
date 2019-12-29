<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kependudukan');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Kependudukan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Kependudukan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kependudukan';
		// isi table
		$d['namatable'] = 'Info Kependudukan';
		$d['namatable1'] = 'Data KK';
		$d['namatable2'] = 'Data Pendudukan';
		// link
		$d['content'] 	= 'content/kependudukan/kependudukan/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_kependudukan->tampil("where status_penduduk = 'HIDUP'");
		$d['tampil_forkk']	= $this->model_kependudukan->tampil_forkk("where status_no_kk = 'TIDAK ADA' && status_lahir = 'LENGKAP' && status_penduduk = 'HIDUP'");
		$d['tampil_complete']	= $this->model_kependudukan->tampil_complete("where status_no_kk = 'ADA' && status_penduduk = 'HIDUP'");
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Kependudukan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Kependudukan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kependudukan';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/kependudukan/kependudukan/formtambah';		
		// tampil data dari database dengan table
		$d['tampil_agama']		= $this->model_kependudukan->tampil_agama();
		$d['tampil_pendidikan']	= $this->model_kependudukan->tampil_pendidikan();
		$d['tampil_pekerjaan']	= $this->model_kependudukan->tampil_pekerjaan();
		$d['tampil_lingkungan']	= $this->model_kependudukan->tampil_lingkungan();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {

		// $kode 			= $this->input->post('kode');
		$nik				= $this->input->post('nik');
		$nama				= $this->input->post('nama');
		$alamat				= $this->input->post('alamat');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$agama				= $this->input->post('agama');
		$status_kawin		= $this->input->post('status_kawin');
		$pendidikan			= $this->input->post('pendidikan');
		$pekerjaan			= $this->input->post('pekerjaan');
		$golongan_darah		= $this->input->post('golongan_darah');
		$lingkungan			= $this->input->post('lingkungan');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$warga_negara		= $this->input->post('warga_negara');
		$nama_ibu			= $this->input->post('nama_ibu');
		$nama_ayah			= $this->input->post('nama_ayah');

		$statuspenduduk 	= "HIDUP";
		$statusnokk 		= "TIDAK ADA";
		$statuslahir 		= "LENGKAP";

		$data = array(
			// 'kode'	 			=> $kode,
			'nik' 				=> $nik,
			'nama' 				=> $nama,
			'alamat' 			=> $alamat,
			'tempat_lahir' 		=> $tempat_lahir,
			'tgl_lahir' 		=> $tanggal_lahir,
			'agama' 			=> $agama,
			'status_kawin' 		=> $status_kawin,
			'pendidikan' 		=> $pendidikan,
			'pekerjaan' 		=> $pekerjaan,
			'gol_darah' 		=> $golongan_darah,
			'kodelingkungan' 	=> $lingkungan,
			'jenis_kelamin' 	=> $jenis_kelamin,
			'nama_ibu' 			=> $nama_ibu,
			'nama_ayah' 		=> $nama_ayah,
			'status_penduduk' 	=> $statuspenduduk,
			'status_no_kk' 		=> $statusnokk,
			'status_lahir' 		=> $statuslahir
			);

		
		if(!$this->model_kependudukan->input_data('penduduk',$data)){
            $this->session->set_flashdata('pesan','Maaf Data Kependudukan Tidak Bisa Ditambah');
            redirect('kependudukan/kependudukan');
		}else{				
			$this->session->set_flashdata('pesan','Data Kependudukan Berhasil Ditambah');
			redirect('kependudukan/kependudukan');
		}
	}

	public function edit($nik)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Kependudukan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Kependudukan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kependudukan';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/kependudukan/kependudukan/formedit';
		// tampil data dari database dengan table
		$d['tampil_agama']		= $this->model_kependudukan->tampil_agama();
		$d['tampil_pendidikan']	= $this->model_kependudukan->tampil_pendidikan();
		$d['tampil_pekerjaan']	= $this->model_kependudukan->tampil_pekerjaan();
		$d['tampil_lingkungan']	= $this->model_kependudukan->tampil_lingkungan();
		// ambil data di file tampildata
		$d['update'] = $this->model_kependudukan->tampil_data("where nik = '$nik'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode 				= $this->input->post('nik');
		$nama				= $this->input->post('nama');
		$alamat				= $this->input->post('alamat');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$agama				= $this->input->post('agama');
		$status_kawin		= $this->input->post('status_kawin');
		$pendidikan			= $this->input->post('pendidikan');
		$pekerjaan			= $this->input->post('pekerjaan');
		$golongan_darah		= $this->input->post('golongan_darah');
		$lingkungan			= $this->input->post('lingkungan');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$warga_negara		= $this->input->post('warga_negara');
		$nama_ibu			= $this->input->post('nama_ibu');
		$nama_ayah			= $this->input->post('nama_ayah');
		$noaktalahir		= $this->input->post('noaktalahir');

		$statuslahir = "LENGKAP";

		$data = array(
			'nik'	 			=> $kode,
			'nama' 				=> $nama,
			'alamat' 			=> $alamat,
			'tempat_lahir' 		=> $tempat_lahir,
			'tgl_lahir' 		=> $tanggal_lahir,
			'agama' 			=> $agama,
			'status_kawin' 		=> $status_kawin,
			'pendidikan' 		=> $pendidikan,
			'pekerjaan' 		=> $pekerjaan,
			'gol_darah' 		=> $golongan_darah,
			'kodelingkungan' 	=> $lingkungan,
			'jenis_kelamin' 	=> $jenis_kelamin,
			'nama_ibu' 			=> $nama_ibu,
			'nama_ayah' 		=> $nama_ayah,
			'no_akta_lahir' 	=> $noaktalahir,
			'status_lahir' 		=> $statuslahir
			);
		
		$where = array('nik' => $kode);

		if(!$this->model_kependudukan->edit_data('penduduk',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data Kependudukan Tidak Bisa Diedit');
            redirect('kependudukan/kependudukan');
		}else{				
			$this->session->set_flashdata('pesan','Data Kependudukan Berhasil Diedit');
			redirect('kependudukan/kependudukan');
		}
	}

	public function hapus($kode)
	{
		$where = array('nik' => $kode);

		$aksi = $this->model_kependudukan->hapus_data($where,'penduduk');
		
		if($aksi == FALSE){
            $this->session->set_flashdata('pesan','Maaf Data Tidak Bisa Dihapus');
            redirect('kependudukan/kependudukan');
		}else{				
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
			redirect('kependudukan/kependudukan');
		}
	}

	public function buatkk($nik)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Buat Kartu Keluarga';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Buat Kartu Keluarga';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kependudukan';
		// isi table
		$d['namatable'] = 'Form Buat Kartu Keluarga';
		// link
		$d['content'] 	= 'content/kependudukan/kependudukan/formbuatkk';
		// ambil data di file tampildata
		$d['update'] = $this->model_kependudukan->tampil("where nik = '$nik'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function buatkk_aksi()
	{
		$nik 				= $this->input->post('nik');
		$nokk				= $this->input->post('nokk');
		$status_keluarga	= $this->input->post('status_keluarga');
		$nourutkk			= $this->input->post('nourutkk');

		$statusnokk 		= "ADA";

		$data = array(
			'nik'	 			=> $nik,
			'no_kk' 			=> $nokk,
			'status_keluarga' 	=> $status_keluarga,
			// 'no_urut_kk' 		=> $nourutkk,
			'status_no_kk'		=> $statusnokk
			);
		
		$where = array('nik' => $nik);
		
		if(!$this->model_kependudukan->edit_data('penduduk',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data KK Tidak Bisa Dibuat');
            redirect('kependudukan/kependudukan');
		}else{				
			$this->session->set_flashdata('pesan','Data KK Berhasil Dibuat');
			redirect('kependudukan/kependudukan');
		}
	}

}
