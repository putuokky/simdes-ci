<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_profil');
        $this->load->helper('url');
	}

	public function index()
	{
		// security
		$this->model_security->securitymasuk();
		// title
		$d['title']		= 'Profile';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'User Profile';
		$d['awal']		= 'Home';
		$d['judul'] 	= 'Profile';
		$d['subjudul'] 	= '';
		// link
		$d['content'] 	= 'content/profil/data_profile';	

		$nip = $this->session->userdata('username');
		$d['data_user'] = $this->model_profil->select_user($nip);

		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function edit_aksi()
	{
		$nip 		= $this->input->post('nip');
		$nama		= $this->input->post('nama');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$alamat		= $this->input->post('alamat');
		$telpon		= $this->input->post('tlp');

		$data = array(
			'nama' 		=> $nama,
			'password' 	=> $password,
			'alamat' 	=> $alamat,
			'telpon' 	=> $telpon,
			);
		
		$where = array('nip' => $nip);
		$aksi = $this->model_profil->edit_data('login',$data,$where);
		
		if($aksi == FALSE){
            $this->session->set_flashdata('pesan','Maaf Data Tidak Bisa Diedit');
            redirect('profile');
		}else{				
			$this->session->set_flashdata('pesan','Data Berhasil Diedit');
			redirect('profile');
		}
	}
}
