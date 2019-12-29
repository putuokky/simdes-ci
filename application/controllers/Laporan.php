<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	private $html2pdf = NULL;

	function __construct(){
		parent::__construct();		
		$this->load->model('model_laporan', 'lapor');
        $this->load->helper('url');
	}

	public function index()
	{
		// security
		// $this->model_security->securitymasuk();
		// title
		$d['title']		= 'Laporan';
		$d['subtitle']	= 'SIMDES SESETAN';
		// logo
		$d['brand'] 	= 'SIMDES SESETAN';
		// main content
		$d['header']	= 'Laporan';
		$d['awal'] 		= 'Home';
		$d['judul'] 	= 'Laporan';
		$d['subjudul'] 	= '';
		// isi table
		$d['namatable'] = 'Info Laporan';
		// link
		$d['content'] 	= 'content/laporan/laporan.php';
		// menampilkan halaman website
		$this->load->view('template',$d);
	}

	public function printLaporan(){
		$post = $this->input->post();

		if($this->session->userdata('level') == 'Kepala Lurah'){
			$jenlaporan = $post['ttd'];
		} else {
			$jenlaporan = 1;
		}

		$dataPassing = array(
			'data' => $this->lapor->getDataLaporan($post['tglMulai'], $post['tglAkhir']),
			'ttd' => $jenlaporan,
			'tglMulai' => $post['tglMulai'],
			'tglAkhir' => $post['tglAkhir'],
			'tglSekarang' => date('d-m-Y')
		);
 
		//here we go...
		$content = $this->load->view('content/laporan/print_laporan', $dataPassing, TRUE);
		$filename = 'Laporan_Kelurahan_Sesetan'.'_'.date('Y-m-d-H-i-s').'.pdf';
		require_once(APPPATH.'/third_party/html2pdf/html2pdf.class.php');
		$this->html2pdf = new HTML2PDF('P', 'A4', 'en', FALSE, 'ISO-8859-15', array(20, 30, 30, 30));
		$this->html2pdf->setDefaultFont('Arial');
		$this->html2pdf->writeHtml($content, isset($_GET['vuehtml']));
		$this->html2pdf->Output($filename);
	}
}

