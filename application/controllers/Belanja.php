<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		$this->load->helper('string');
	}

	// Halaman Belanja
	public function index()
	{
		$keranjang = $this->cart->contents();

		$data = array(	'title'		=> 'Keranjang Belanja',
						'keranjang'	=> $keranjang,
						'isi'		=> 'belanja/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Belanja Sukses
	public function sukses()
	{

		$data = array(	'title'		=> 'Belanja Berhasil',
						'isi'		=> 'belanja/sukses'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Checkout
	public function checkout()
	{
		// Check pelanggan

		// Kondisi login
		if($this->session->userdata('email')) {
			$email 				= $this->session->userdata('email');
			$nama_pelanggan 	= $this->session->userdata('nama_pelanggan'); 
			$pelanggan 			= $this->pelanggan_model->sudah_login($email,$nama_pelanggan);

			$keranjang = $this->cart->contents();

			// valid input
			$valid = $this->form_validation;

			$valid->set_rules('nama_pelanggan','Nama lengkap','required',
					array('required' 	=> '%s harus diisi'));

			$valid->set_rules('telepon','Nomor telepon','required',
					array('required' 	=> '%s harus diisi'));

			$valid->set_rules('alamat','Alamat','required',
					array('required' 	=> '%s harus diisi'));

			$valid->set_rules('email','Email','required|valid_email',
					array('required' 	=> '%s harus diisi',
						  'valid_email' => '%s tidak valid'));

			if ($valid->run()===FALSE) {
			// End Validasi

			$data = array(	'title'		=> 'Checkout',
							'keranjang'	=> $keranjang,
							'pelanggan'	=> $pelanggan,
							'isi'		=> 'belanja/checkout'
						);
			$this->load->view('layout/wrapper', $data, FALSE);
			
			// Masuk database
			}else{
				$i = $this->input;
				$data = array(	'id_pelanggan'			=> $pelanggan->id_pelanggan,
								'nama_pelanggan'		=> $i->post('nama_pelanggan'),
								'email'					=> $i->post('email'),
								'telepon'				=> $i->post('telepon'),
								'alamat'				=> $i->post('alamat'),
								'kode_transaksi'		=> $i->post('kode_transaksi'),
								'tanggal_transaksi'		=> $i->post('tanggal_transaksi'),
								'jumlah_transaksi'		=> $i->post('jumlah_transaksi'),
								'status_bayar'			=> 'Belum dibayar',
								'status_kirim'			=> 'Pending',
								'tanggal_post'			=> date('Y-m-d H:i:s')
							);
				// Proses masuk ke header_transaksi
				$this->header_transaksi_model->tambah($data);
				// Proses masuk ke tabel transaksi
				foreach ($keranjang as $keranjang) {
					$sub_total = $keranjang['price'] * $keranjang['qty'];

					$data = array(	'id_pelanggan'		=> $pelanggan->id_pelanggan,
									'kode_transaksi'	=> $i->post('kode_transaksi'),
									'id_produk'			=> $keranjang['id'],
									'harga'				=> $keranjang['price'],
									'jumlah'			=> $keranjang['qty'],
									'total_harga'		=> $sub_total,
									'tanggal_transaksi'	=> $i->post('tanggal_transaksi'),
								);
					$this->transaksi_model->tambah($data);
				}
				// End proses masuk tabel transaksi
				// Setelah masuk ke tabel transaksi, maka keranjang dikosongkan lagi
				$this->cart->destroy();	
				// End pengosongan keranjang
				$this->session->set_flashdata('sukses', 'Checkout Berhasil, Segera Lakukan Konfirmasi Pembayaran di Riwayat Belanja Anda');
				redirect(base_url('belanja/sukses'),'refresh');
			}
			// End masuk database

		}else{
			// Belum login, atau harus registrasi
			$this->session->set_flashdata('sukses', 'Silahkan Login atau Registrasi Terlebih Dahulu');
			redirect(base_url('registrasi'),'refresh');
		}
	}

	// Tambah ke Keranjang
	public function add()
	{
		// Ambil data dari form
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		$redirect_page 	= $this->input->post('redirect_page');
		// Proses masuk keranjang
		$data = array(	'id'		=> $id,
						'qty'		=> $qty,
						'price'		=> $price,
						'name'		=> $name
					);

		$this->cart->insert($data);
		// Redirect page
		redirect($redirect_page,'refresh');
	}

	// Update Cart
	public function update_cart($rowid)
	{
		// Jika ada rowid
		if($rowid) {
			$data = array(	'rowid'		=> $rowid,
							'qty'		=> $this->input->post('qty')
						);
			$this->cart->update($data);
			$this->session->set_flashdata('sukses', 'Data Belanjaan Telah diupdate');
			redirect(base_url('belanja'),'refresh');
		}else{
			// Jika tidak ada rowid
			redirect(base_url('belanja'),'refresh');
		}
	}

	// Hapus semua keranjang belanja
	public function hapus($rowid='')
	{
		if($rowid) {
			// Hapus per item
			$this->cart->remove($rowid);
			$this->session->set_flashdata('sukses', 'Data Keranjang Belanja Telah dihapus');
			redirect(base_url('belanja'),'refresh');
		}else{
			// Hapus semua
			$this->cart->destroy();
			$this->session->set_flashdata('sukses', 'Data Keranjang Belanja Telah dihapus');
			redirect(base_url('belanja'),'refresh');
		}
	}
}

/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */