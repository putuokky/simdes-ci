<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_member');
        $this->load->helper('url');
	}


	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Data User';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Data User';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Pengaturan';
		$d['subjudul'] 	= 'User';
		// isi table
		$d['namatable'] = 'Info User';
		$d['namatable1'] = 'Data User';
		// link
		$d['content'] 	= 'content/pengaturan/member/tampildata';
		// tampil data dari database dengan table
		$d['tampil']	= $this->model_member->tampil_data();
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah() 
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Tambah User';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Tambah User';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Pengaturan';
		$d['subjudul'] 	= 'User';
		// isi table
		$d['namatable'] = 'Form Tambah';
		// link
		$d['content'] 	= 'content/pengaturan/member/formtambah';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function tambah_aksi() {
		$nip		= $this->input->post('nip');
		$nama		= $this->input->post('nama');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$level		= $this->input->post('level');
		$alamat		= $this->input->post('alamat');
		$telpon		= $this->input->post('telpon');

		$data = array(
			'nip'		=> $nip,
			'nama' 		=> $nama,
			'username' 	=> $username,
			'password' 	=> $password,
			'level' 	=> $level,
			'alamat' 	=> $alamat,
			'telpon' 	=> $telpon
			);

		
		if(!$this->model_member->input_data('login',$data)){
            $this->session->set_flashdata('pesan','Maaf Data User Tidak Bisa Ditambah');
           redirect('pengaturan/user');
		}else{				
			$this->session->set_flashdata('pesan','Data User Berhasil Ditambah');
			redirect('pengaturan/user');
		}
	}

	public function edit($kode)
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Edit User';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Edit User';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Pengaturan';
		$d['subjudul'] 	= 'User';
		// isi table
		$d['namatable'] = 'Form Edit';
		// link
		$d['content'] 	= 'content/pengaturan/member/formedit';
		// ambil data di file tampildata
		$d['update'] = $this->model_member->tampil_data("where kode = '$kode'");
		// menampilkan halaman website
		$this->load->view('template',$d);	
	}

	public function edit_aksi()
	{
		$kode		= $this->input->post('kode');
		$nip		= $this->input->post('nip');
		$nama		= $this->input->post('nama');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$level		= $this->input->post('level');

		$data = array(
			'nip'		=> $nip,
			'nama' 		=> $nama,
			'username' 	=> $username,
			'password' 	=> $password,
			'level' 	=> $level
			);
		
		$where = array('kode' => $kode);
		
		if(!$this->model_member->edit_data('login',$data,$where)){
            $this->session->set_flashdata('pesan','Maaf Data User Tidak Bisa Diedit');
           redirect('pengaturan/user');
		}else{				
			$this->session->set_flashdata('pesan','Data User Berhasil Diedit');
			redirect('pengaturan/user');
		}
	}

	public function hapus($kode)
	{
		$where = array('kode' => $kode);
		
		if(!$this->model_member->hapus_data($where,'login')){
            $this->session->set_flashdata('pesan','Maaf Data User Tidak Bisa Dihapus');
           redirect('pengaturan/user');
		}else{				
			$this->session->set_flashdata('pesan','Data User Berhasil Dihapus');
			redirect('pengaturan/user');
		}
	}

}
