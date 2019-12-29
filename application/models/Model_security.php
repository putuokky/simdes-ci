<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_Model {

	public function securitymasuk()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('login');
		} 
	}

	public function securitykeluar()
	{
		$username = $this->session->userdata('username');
		if (!empty($username)) {
			$this->session->set_userdata();
			redirect('home');
		} 
	}
	
}
