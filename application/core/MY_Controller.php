<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $menu = array( 
		0 => array(
		'menu'=> 'menuku',
		'link'=> '',
		'icon' => 'fa fa-television'
		));

	function __construct()
	{
		parent::__construct();
	}




}