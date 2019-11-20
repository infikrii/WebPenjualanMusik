<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('rekening_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('konfigurasi_model');
	}

	// Load Data Transaksi
	public function index()
	{
		$header_transaksi = $this->header_transaksi_model->listing();

		$data = array(	'title'				=> 'Riwayat Transaksi',
						'header_transaksi'  => $header_transaksi,
						'isi'				=> 'admin/transaksi/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Detail
	public function detail($kode_transaksi)
	{
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);

		$data = array(	'title'				=> 'Riwayat Belanja',
						'header_transaksi' 	=> $header_transaksi,
						'transaksi'			=> $transaksi,
						'isi'				=> 'admin/transaksi/detail'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Cetak Laporan
	// public function cetak_laporan()
	// {
	// 	$header_transaksi 	= $this->header_transaksi_model->listing();
	// 	$transaksi 			= $this->transaksi_model->listing();
	// 	$site 				= $this->konfigurasi_model->listing();

	// 	$data = array(	'title'				=> 'Laporan Transaksi',
	// 					'header_transaksi' 	=> $header_transaksi,
	// 					'transaksi'			=> $transaksi,
	// 					'site'				=> $site
	// 				);
	// 	$this->load->view('admin/transaksi/cetak_laporan', $data, FALSE);
	// }

	public function cetak_laporan()
	{
		$header_transaksi 	= $this->header_transaksi_model->listing();
		$transaksi 			= $this->transaksi_model->listing();
		$site 				= $this->konfigurasi_model->listing();

		$data = array(	'title'				=> 'Laporan Transaksi',
						'header_transaksi' 	=> $header_transaksi,
						'transaksi'			=> $transaksi,
						'site'				=> $site
					);
		// $this->load->view('admin/transaksi/cetak', $data, FALSE);
		$html = $this->load->view('admin/transaksi/cetak_laporan', $data, true);
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('
		<div style="text-align: left; font-weight: bold;">
		    <img src="'.base_url('assets/upload/image/'.$site->logo).'" style="height: 30px; width: auto;">	    	
		    </style><hr>
		</div>');
		$mpdf->SetHTMLFooter('
			<div style="padding: 10px 20px; background-color: black; color: white; font-size: 12px;">
				Alamat: '.$site->namaweb.' ('.$site->alamat.')<br>
				Telepon: '.$site->telepon.'
			</div>
		');
		// Write some HTML code:
		$mpdf->WriteHTML($html);
		// Output a PDF file directly to the browser
		$mpdf->Output();
	}

	// cetak detail
	// public function cetak($kode_transaksi)
	// {
	// 	$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
	// 	$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);
	// 	$site 				= $this->konfigurasi_model->listing();

	// 	$data = array(	'title'				=> 'Detail Transaksi',
	// 					'header_transaksi' 	=> $header_transaksi,
	// 					'transaksi'			=> $transaksi,
	// 					'site'				=> $site
	// 				);
	// 	$this->load->view('admin/transaksi/cetak', $data, FALSE);
	// }

	// unduh pdf
	public function pdf($kode_transaksi)
	{
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);
		$site 				= $this->konfigurasi_model->listing();

		$data = array(	'title'				=> 'Detail Transaksi',
						'header_transaksi' 	=> $header_transaksi,
						'transaksi'			=> $transaksi,
						'site'				=> $site
					);
		// $this->load->view('admin/transaksi/cetak', $data, FALSE);
		$html = $this->load->view('admin/transaksi/cetak', $data, true);
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('
		<div style="text-align: left; font-weight: bold;">
		    <img src="'.base_url('assets/upload/image/'.$site->logo).'" style="height: 30px; width: auto;">	    	
		    </style><hr>
		</div>');
		$mpdf->SetHTMLFooter('
			<div style="padding: 10px 20px; background-color: black; color: white; font-size: 12px;">
				Alamat: '.$site->namaweb.' ('.$site->alamat.')<br>
				Telepon: '.$site->telepon.'
			</div>
		');
		// Write some HTML code:
		$mpdf->WriteHTML($html);
		// Output a PDF file directly to the browser
		$mpdf->Output();
	}

	// Pengiriman
	public function kirim($kode_transaksi)
	{
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);
		$site 				= $this->konfigurasi_model->listing();

		$data = array(	'title'				=> 'Pengiriman Barang',
						'header_transaksi' 	=> $header_transaksi,
						'transaksi'			=> $transaksi,
						'site'				=> $site
					);
		// $this->load->view('admin/transaksi/kirim', $data, FALSE);
		$html = $this->load->view('admin/transaksi/kirim', $data, true);
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('
		<div style="text-align: left; font-weight: bold;">
		    <img src="'.base_url('assets/upload/image/'.$site->logo).'" style="height: 30px; width: auto;">	    	
		    </style><hr>
		</div>'); 
		$mpdf->SetHTMLFooter('
			<div style="padding: 10px 20px; background-color: black; color: white; font-size: 12px;">
				Alamat: '.$site->namaweb.' ('.$site->alamat.')<br>
				Telepon: '.$site->telepon.'
			</div>
		');
		// Write some HTML code:
		$mpdf->WriteHTML($html);
		// Output a PDF file directly to the browser
		$mpdf->Output();
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */