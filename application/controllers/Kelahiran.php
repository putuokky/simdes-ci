<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelahiran extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kelahiran');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data Kelahiran';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data Kelahiran';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kelahiran';
		// isi table
		$d['namatable'] = 'Info Kelahiran';
		$d['namatable1'] = 'Data Buat Akta Lahir';
		$d['namatable2'] = 'Data Kelahiran';
		// link
		$d['content'] 	= 'content/kependudukan/kelahiran/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_kelahiran->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah Kelahiran';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah Kelahiran';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kelahiran';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/kependudukan/kelahiran/formtambah';
		// tampil data dari database dengan table
		$d['tampil_agama']		= $this->model_kelahiran->tampil_agama();
		$d['tampil_lingkungan']	= $this->model_kelahiran->tampil_lingkungan();
		$d['tampil_pendidikan']	= $this->model_kelahiran->tampil_pendidikan();
		$d['tampil_pekerjaan']	= $this->model_kelahiran->tampil_pekerjaan();
		$d['tampil_pendlaki']	= $this->model_kelahiran->tampil_penduduk("where status_penduduk = 'HIDUP' && jenis_kelamin = 'LAKI-LAKI' AND status_kawin = 'KAWIN'");
		$d['tampil_pendperem']	= $this->model_kelahiran->tampil_penduduk("where status_penduduk = 'HIDUP' && jenis_kelamin = 'PEREMPUAN' AND status_kawin = 'KAWIN'");
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		// $no_surat_lahir		= $this->input->post('no_surat_lahir');
		// $tgl_surat			= $this->input->post('tgl_surat');

		$nama				= $this->input->post('nama');
		$anak_ke			= $this->input->post('anak_ke');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$tempat_kelahiran	= $this->input->post('tempat_kelahiran');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');

		$pecah = date ("dmy", strtotime($tanggal_lahir));
		$rep = str_replace("20", "090517",$pecah);

		$nik				= "517101".$rep."0002";
		$alamat				= $this->input->post('alamat');
		$nama_ayah			= $this->input->post('nama_ayah');
		$nama_ibu			= $this->input->post('nama_ibu');
		// untuk tambah data ke penduduk
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$status_kawin		= "BELUM KAWIN";
		$pendidikan			= "IDAK / BELUM SEKOLAH";
		$pekerjaan			= "BELUM / TIDAK BEKERJA";
		// $noaktalahir		= $this->input->post('noaktalahir');
		$agama				= $this->input->post('agama');
		$golongan_darah		= $this->input->post('golongan_darah');
		$lingkungan			= $this->input->post('lingkungan');
		$statuspenduduk = "HIDUP";
		$statusnokk		= "TIDAK ADA";
		$statuslahir = "LENGKAP";
		$tgl_surat = date("Y-m-d");

		$data = array(
			// 'no_surat_kelahiran'	=> $no_surat_lahir,
			'tgl_surat' 			=> $tgl_surat,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'anak_ke' 				=> $anak_ke,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'tempat_kelahiran'		=> $tempat_kelahiran,
			'tgl_lahir' 			=> $tanggal_lahir,
			'alamat' 				=> $alamat,
			'nama_ibu' 				=> $nama_ibu,
			'nama_ayah' 			=> $nama_ayah,
			'kodelingkungan' 		=> $lingkungan
			);

		$this->model_kelahiran->input_data('kelahiran',$data);

		$data = array(
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'tgl_lahir' 			=> $tanggal_lahir,
			'alamat' 				=> $alamat,
			'nama_ibu' 				=> $nama_ibu,
			'nama_ayah' 			=> $nama_ayah,
			'tempat_lahir' 			=> $tempat_lahir,
			'agama' 				=> $agama,
			'status_kawin' 			=> $status_kawin,
			'pendidikan' 			=> $pendidikan,
			'pekerjaan' 			=> $pekerjaan,
			// 'no_akta_lahir' 		=> $noaktalahir,
			'gol_darah' 			=> $golongan_darah,
			'kodelingkungan' 		=> $lingkungan,
			'status_penduduk' 		=> $statuspenduduk,
			'status_no_kk' 			=> $statusnokk,			
			'status_lahir' 		    => $statuslahir
			);
		
		if(!$this->model_kelahiran->input_data('penduduk',$data)){
            $this->session->set_flashdata('pesan','Maaf Data Kelahiran Tidak Bisa Ditambah');
            redirect('kependudukan/kelahiran');
		}else{				
			$this->session->set_flashdata('pesan','Data Kelahiran Berhasil Ditambah');
			redirect('kependudukan/kelahiran');
		}
	}

	public function edit($no_surat_lahir)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit Kelahiran';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit Kelahiran';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Kependudukan';
		$d['subjudul'] 	= 'Kelahiran';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/kependudukan/kelahiran/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_kelahiran->tampil_data("where no_surat_kelahiran = '$no_surat_lahir'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$no_surat_lahir		= $this->input->post('no_surat_lahir');
		$tgl_surat			= $this->input->post('tgl_surat');
		$nik				= $this->input->post('nik');
		$nama				= $this->input->post('nama');
		$anak_ke			= $this->input->post('anak_ke');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$tempat_kelahiran	= $this->input->post('tempat_kelahiran');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$alamat				= $this->input->post('alamat');
		$nama_ibu			= $this->input->post('nama_ibu');
		$nama_ayah			= $this->input->post('nama_ayah');

		$data = array(
			'no_surat_kelahiran'	=> $no_surat_lahir,
			'tgl_surat' 			=> $tgl_surat,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'anak_ke' 				=> $anak_ke,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'tempat_kelahiran'		=> $tempat_kelahiran,
			'tgl_lahir' 			=> $tanggal_lahir,
			'alamat' 				=> $alamat,
			'nama_ibu' 				=> $nama_ibu,
			'nama_ayah' 			=> $nama_ayah
			);
		
		$where = array('no_surat_kelahiran' => $no_surat_lahir);
		
		if(!$this->model_kelahiran->edit_data('kelahiran',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data Kelahiran Tidak Bisa Diedit');
            redirect('kependudukan/kelahiran');
		}else{				
			$this->session->set_flashdata('pesan','Data Kelahiran Berhasil Diedit');
			redirect('kependudukan/kelahiran');
		}
	}

	public function hapus($kode)
	{
		$where = array('no_surat_kelahiran' => $kode);
		
		if(!$this->model_kelahiran->hapus_data($where,'kelahiran')){
            $this->session->set_flashdata('pesan','Maaf Data Kelahiran Tidak Bisa Dihapus');
            redirect('kependudukan/kelahiran');
		}else{				
			$this->session->set_flashdata('pesan','Data Kelahiran Berhasil Dihapus');
			redirect('kependudukan/kelahiran');
		}
	}

}
