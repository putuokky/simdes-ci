<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendudukmasuk extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pendmasuk');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Penduduk Masuk';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Penduduk Masuk';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Penduduk Masuk';
		// isi table
		$d['namatable'] = 'Data Penduduk Masuk';
		// link
		$d['content'] 	= 'content/kependudukan/pendatang/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_pendmasuk->tampil_data();
		$d['tampil2']	= $this->model_pendmasuk->tampil_data();
		$d['tampil3']	= $this->model_pendmasuk->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Penduduk Masuk';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Penduduk Masuk';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Penduduk Masuk';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/kependudukan/pendatang/formtambah';	
		// tampil data dari database dengan table
		$d['tampil_agama']		= $this->model_pendmasuk->tampil_agama();
		$d['tampil_pendidikan']	= $this->model_pendmasuk->tampil_pendidikan();
		$d['tampil_pekerjaan']	= $this->model_pendmasuk->tampil_pekerjaan();
		$d['tampil_lingkungan']	= $this->model_pendmasuk->tampil_lingkungan();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $no_surat_pendatang	= $this->input->post('no_surat_pendatang');
		// $tgl_surat			= $this->input->post('tgl_surat');
		$tgl_surat = date("Y-m-d");
		$nik				= $this->input->post('nik');
		$nama				= $this->input->post('nama');
		// $nosurat			= $this->input->post('nosurat');
		$tgldatang			= $this->input->post('tgldatang');
		$alamatasal			= $this->input->post('alamatasal');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$dusunlama			= $this->input->post('dusunlama');
		$keldesalama		= $this->input->post('keldesalama');
		$keclama			= $this->input->post('keclama');
		$kabkotalama		= $this->input->post('kabkotalama');
		$provlama			= $this->input->post('provlama');
		$nokk				= $this->input->post('nokk');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$alamatbaru			= $this->input->post('alamatbaru');
		$agama				= $this->input->post('agama');
		$status_kawin		= $this->input->post('status_kawin');
		$pendidikan			= $this->input->post('pendidikan');
		$pekerjaan			= $this->input->post('pekerjaan');
		$lingkungan			= $this->input->post('lingkungan');
		$golongan_darah		= $this->input->post('golongan_darah');
		$nama_ibu			= $this->input->post('nama_ibu');
		$nama_ayah			= $this->input->post('nama_ayah');
		$status_keluarga	= $this->input->post('status_keluarga');
		// $nourutkk			= $this->input->post('nourutkk');
		$statuspenduduk = "HIDUP";
		$statusnokk = "ADA";
		$statuslahir = "LENGKAP";

		$data = array(
			// 'no_surat_pendatang'	=> $no_surat_pendatang,
			'tgl_surat' 			=> $tgl_surat,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			// 'no_surat'				=> $nosurat,
			'tgl_datang' 			=> $tgldatang,
			'alamat_asal' 			=> $alamatasal,
			'tempat_lahir' 			=> $tempat_lahir,
			'tgl_lahir' 			=> $tanggal_lahir,
			'dusun_lama' 			=> $dusunlama,
			'kelurahan_desa_lama' 	=> $keldesalama,
			'kecamatan_lama' 		=> $keclama,
			'kabkota_lama' 			=> $kabkotalama,
			'provinsi_lama' 		=> $provlama,
			'kodelingkungan' 		=> $lingkungan,
			);
		$this->model_pendmasuk->input_data('mutasi_masuk',$data);

		$data = array(
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'tempat_lahir' 			=> $tempat_lahir,
			'tgl_lahir' 			=> $tanggal_lahir,
			'no_kk' 				=> $nokk,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'alamat' 				=> $alamatbaru,
			'agama' 				=> $agama,
			'status_kawin' 			=> $status_kawin,
			'pendidikan' 			=> $pendidikan,
			'pekerjaan' 			=> $pekerjaan,
			'kodelingkungan' 		=> $lingkungan,
			'gol_darah' 			=> $golongan_darah,
			'nama_ibu' 				=> $nama_ibu,
			'nama_ayah' 			=> $nama_ayah,
			'status_keluarga' 		=> $status_keluarga,
			// 'no_urut_kk' 			=> $nourutkk,
			'status_penduduk'		=> $statuspenduduk,
			'status_no_kk' 			=> $statusnokk,
			'status_lahir' 			=> $statuslahir
			);
		
		if(!$this->model_pendmasuk->input_data('penduduk',$data)){
            $this->session->set_flashdata('pesan','Maaf Data Penduduk Masuk Tidak Bisa Ditambah');
            redirect('kependudukan/pendudukmasuk');
		}else{				
			$this->session->set_flashdata('pesan','Data Penduduk Masuk Berhasil Ditambah');
			redirect('kependudukan/pendudukmasuk');
		}
	}

	public function edit($no_surat_pendatang)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Penduduk Masuk';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Penduduk Masuk';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Penduduk Masuk';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/kependudukan/pendatang/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_pendmasuk->tampil_data("where no_surat_pendatang = '$no_surat_pendatang'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$no_surat_pendatang	= $this->input->post('no_surat_pendatang');
		$tgl_surat			= $this->input->post('tgl_surat');
		$nik				= $this->input->post('nik');
		$nama				= $this->input->post('nama');
		// $nosurat			= $this->input->post('nosurat');
		$tgldatang			= $this->input->post('tgldatang');
		$alamatasal			= $this->input->post('alamatasal');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$dusunlama			= $this->input->post('dusunlama');
		$keldesalama		= $this->input->post('keldesalama');
		$keclama			= $this->input->post('keclama');
		$kabkotalama		= $this->input->post('kabkotalama');
		$provlama			= $this->input->post('provlama');

		$data = array(
			'no_surat_pendatang'	=> $no_surat_pendatang,
			'tgl_surat' 			=> $tgl_surat,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			// 'no_surat'				=> $nosurat,
			'tgl_datang' 			=> $tgldatang,
			'alamat_asal' 			=> $alamatasal,
			'tempat_lahir' 			=> $tempat_lahir,
			'tgl_lahir' 			=> $tanggal_lahir,
			'dusun_lama' 			=> $dusunlama,
			'kelurahan_desa_lama' 	=> $keldesalama,
			'kecamatan_lama' 		=> $keclama,
			'kabkota_lama' 			=> $kabkotalama,
			'provinsi_lama' 		=> $provlama
			);
		
		$where = array('no_surat_pendatang' => $no_surat_pendatang);
		
		if(!$this->model_pendmasuk->edit_data('mutasi_masuk',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data Penduduk Masuk Tidak Bisa Diedit');
            redirect('kependudukan/pendudukmasuk');
		}else{				
			$this->session->set_flashdata('pesan','Data Penduduk Masuk Berhasil Diedit');
			redirect('kependudukan/pendudukmasuk');
		}
	}

	public function hapus($kode)
	{
		$where = array('no_surat_pendatang' => $kode);
		
		if(!$this->model_pendmasuk->hapus_data($where,'mutasi_masuk')){
            $this->session->set_flashdata('pesan','Maaf Data Penduduk Masuk Tidak Bisa Dihapus');
            redirect('kependudukan/pendudukmasuk');
		}else{				
			$this->session->set_flashdata('pesan','Data Penduduk Masuk Berhasil Dihapus');
			redirect('kependudukan/pendudukmasuk');
		}
	}

}
