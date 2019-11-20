<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		$this->load->model('rekening_model');
		// Proteksi dengan simple pelanggan => cek login
		$this->simple_pelanggan->cek_login();
	}

	// Halaman Dashboard
	public function index()
	{
		// Ambil data login id_pelanggan dari session
		$id_pelanggan		= $this->session->userdata('id_pelanggan');
		$header_transaksi 	= $this->header_transaksi_model->pelanggan($id_pelanggan);
		// Proteksi dengan simple pelanggan => cek login
		$this->simple_pelanggan->cek_login();

		$data = array(	'title'				=> 'Halaman Dashboard Pelanggan',
						'header_transaksi' 	=> $header_transaksi,
						'isi'				=> 'dashboard/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Belanja
	public function belanja()
	{
		// Ambil data login id_pelanggan dari session
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$header_transaksi = $this->header_transaksi_model->pelanggan($id_pelanggan);

		$data = array(	'title'				=> 'Riwayat Belanja',
						'header_transaksi' 	=> $header_transaksi,
						'isi'				=> 'dashboard/belanja'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail
	public function detail($kode_transaksi)
	{
		// Ambil data login id_pelanggan dari session
		$id_pelanggan	 	= $this->session->userdata('id_pelanggan');
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);

		// Pastikan pelanggan hanya mengakses data transaksi
		if($header_transaksi->id_pelanggan != $id_pelanggan) {
			$this->session->set_flashdata('danger', 'Anda Mencoba Mengakses Data Transaksi Orang Lain');
			redirect(base_url('masuk'));
		}

		$data = array(	'title'				=> 'Riwayat Belanja',
						'header_transaksi' 	=> $header_transaksi,
						'transaksi'			=> $transaksi,
						'isi'				=> 'dashboard/detail'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Profil
	public function profile()
	{
		// Ambil data login id_pelanggan dari session
		$id_pelanggan	= $this->session->userdata('id_pelanggan');
		$pelanggan 		= $this->pelanggan_model->detail($id_pelanggan);

		// valid input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelanggan','Nama lengkap','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('alamat','Alamat lengkap','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('telepon','Nomor Telepon','required',
				array('required' 	=> '%s harus diisi'));
					  
		if ($valid->run()===FALSE) {
			// End Validasi

		$data = array(	'title'				=> 'Profil Saya',
						'pelanggan' 		=> $pelanggan,
						'isi'				=> 'dashboard/profile'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			// Kalau password lebih dari 6 karakter, maka update
			if(strlen($i->post('password')) >= 6) {
				$data = array(	'id_pelanggan'			=> $id_pelanggan,
								'nama_pelanggan'		=> $i->post('nama_pelanggan'),
								'password'				=> SHA1($i->post('password')),
								'telepon'				=> $i->post('telepon'),
								'alamat'				=> $i->post('alamat'),
							);
			}else{
				// Kalau password kurang dari 6 maka passowr tidak diganti
				$data = array(	'id_pelanggan'			=> $id_pelanggan,
								'nama_pelanggan'		=> $i->post('nama_pelanggan'),
								'telepon'				=> $i->post('telepon'),
								'alamat'				=> $i->post('alamat'),
							);
			}
			// End data update
			$this->pelanggan_model->edit($data);
			$this->session->set_flashdata('sukses', 'Update Profile Berhasil');
			redirect(base_url('dashboard/profile'),'refresh');
		}
		// End masuk database
	}

	// Konfirmasi Pembayaran
	public function konfirmasi($kode_transaksi)
	{
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$rekening 			= $this->rekening_model->listing();

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_bank','Nama Bank','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('rekening_pembayaran','Nomor Rekening','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('rekening_pelanggan','Atas Nama','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('tanggal_bayar','Tanggal Bayar','required',
				array('required' 	=> '%s harus diisi'));

		$valid->set_rules('jumlah_bayar','Jumlah Bayar','required',
				array('required' 	=> '%s harus diisi'));

		if ($valid->run()) {
			// bukti bayar
			if(!empty($_FILES['bukti_bayar']['name'])) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2042'; //Dalam ukuran KB
			$config['max_width']  		= '1024';
			$config['max_height'] 		= '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('bukti_bayar')){
			// End Validasi

		$data = array(	'title'				=> 'Konfirmasi Pembayaran',
						'header_transaksi'	=> $header_transaksi,
						'rekening'			=> $rekening,
						'error'				=>	$this->upload->display_errors(),
						'isi'				=> 'dashboard/konfirmasi' 
						);
		$this->load->view('layout/wrapper', $data, FALSE);

		// Masuk database
	}else{
		$upload_gambar = array('upload_data' => $this->upload->data());

		// Create Thumbnail Gambar
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		$config['new_image']		= './assets/upload/image/thumbs';
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;
		$config['height']       	= 250;
		$config['thumb_marker']		= '';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();
		// End Create Thumbnail

		$i = $this->input;

		$data = array(	'id_header_transaksi'			=> $header_transaksi->id_header_transaksi,
						'status_bayar'					=> 'Dibayar',
						'status_kirim'					=> 'Dikirim',
						'jumlah_bayar'					=> $i->post('jumlah_bayar'),
						'rekening_pembayaran'			=> $i->post('rekening_pembayaran'),
						'rekening_pelanggan'			=> $i->post('rekening_pelanggan'),
						'bukti_bayar'					=> $upload_gambar['upload_data']['file_name'],
						'id_rekening'					=> $i->post('id_rekening'),
						'tanggal_bayar'					=> $i->post('tanggal_bayar'),
						'nama_bank'						=> $i->post('nama_bank')
					);
		$this->header_transaksi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Konfirmasi Pembayaran Berhasil');
		redirect(base_url('dashboard/belanja'),'refresh');
	}}else {
		// Edit produk tanpa ganti gambar
		$i = $this->input;

		$data = array(	'id_header_transaksi'			=> $header_transaksi->id_header_transaksi,
						'status_bayar'					=> 'Dibayar',
						'status_kirim'					=> 'Dikirim',
						'jumlah_bayar'					=> $i->post('jumlah_bayar'),
						'rekening_pembayaran'			=> $i->post('rekening_pembayaran'),
						'rekening_pelanggan'			=> $i->post('rekening_pelanggan'),
						// 'bukti_bayar'					=> $upload_gambar['upload_data']['file_name'],
						'id_rekening'					=> $i->post('id_rekening'),
						'tanggal_bayar'					=> $i->post('tanggal_bayar'),
						'nama_bank'						=> $i->post('nama_bank')
					);
		$this->header_transaksi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Konfirmasi Pembayaran Berhasil');
		redirect(base_url('dashboard/belanja'),'refresh');
	}}
		// End masuk database
	$data = array(		'title'				=> 'Konfirmasi Pembayaran',
						'header_transaksi'	=> $header_transaksi,
						'rekening'			=> $rekening,
						'isi'				=> 'dashboard/konfirmasi' 
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */