<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		// Proteksi Halaman 
		$this->simple_login->cek_login();
	}

	// Data Pelanggan
	public function index()
	{
		$pelanggan = $this->pelanggan_model->listing();	

		$data = array ('title' 		=> 'Data Pelanggan',
						'pelanggan' => $pelanggan,
						'isi'  		=> 'admin/pelanggan/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Pelanggan
	// public function tambah()
	// {
	// 	// valid input
	// 	$valid = $this->form_validation;

	// 	$valid->set_rules('nama','Nama lengkap','required',
	// 			array('required' 	=> '%s harus diisi'));

	// 	$valid->set_rules('email','Email','required|valid_email',
	// 			array('required' 	=> '%s harus diisi',
	// 				  'valid_email' => '%s tidak valid'));

	// 	$valid->set_rules('pelangganname','Pelangganname','required|min_length[6]|max_length[12]|is_unique[pelanggans.pelangganname]',
	// 			array('required' 	=> '%s harus diisi',
	// 				  'min_length' 	=> '%s minimal 6 karakter',
	// 				  'max_length' 	=> '%s maksimal 12 karakter',
	// 				  'is_unique' 	=> '%s sudah ada. Buat Pelangganname baru.'));

	// 	$valid->set_rules('password','Password','required',
	// 			array('required' 	=> '%s harus diisi'));
					  

	// 	if ($valid->run()===FALSE) {
	// 		// End Validasi

	// 	$data = array ('title' => 'Tambah Pengguna',
	// 					'isi'  => 'admin/pelanggan/tambah'
	// 				);
	// 	$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
	// }else{
	// 	$i = $this->input;
	// 	$data = array(	'nama'					=> $i->post('nama'),
	// 					'email'					=> $i->post('email'),
	// 					'pelangganname'				=> $i->post('pelangganname'),
	// 					'password'				=> SHA1($i->post('password')),
	// 					'akses_level'			=> $i->post('akses_level')
	// 				);
	// 	$this->pelanggan_model->tambah($data);
	// 	$this->session->set_flashdata('sukses', 'Data Telah ditambah');
	// 	redirect(base_url('admin/pelanggan'),'refresh');
	// }
	// End masuk database
	// }

	// Edit Pelanggan
	// public function edit($id_pelanggan)
	// {
	// 	$pelanggan = $this->pelanggan_model->detail($id_pelanggan);	

	// 	// valid input
	// 	$valid = $this->form_validation;

	// 	$valid->set_rules('nama','Nama lengkap','required',
	// 			array('required' 	=> '%s harus diisi'));

	// 	$valid->set_rules('email','Email','required|valid_email',
	// 			array('required' 	=> '%s harus diisi',
	// 				  'valid_email' => '%s tidak valid'));

	// 	$valid->set_rules('password','Password','required',
	// 			array('required' 	=> '%s harus diisi'));

	// 	if ($valid->run()===FALSE) {
	// 		// End Validasi

	// 	$data = array ('title' => 'Edit Pengguna',
	// 					'pelanggan' => $pelanggan,
	// 					'isi'  => 'admin/pelanggan/edit'
	// 				);
	// 	$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
	// }else{
	// 	$i = $this->input;
	// 	$data = array(	'id_pelanggan'				=> $id_pelanggan,
	// 					'nama'					=> $i->post('nama'),
	// 					'email'					=> $i->post('email'),
	// 					'pelangganname'				=> $i->post('pelangganname'),
	// 					'password'				=> SHA1($i->post('password')),
	// 					'akses_level'			=> $i->post('akses_level')
	// 				);
	// 	$this->pelanggan_model->edit($data);
	// 	$this->session->set_flashdata('sukses', 'Data Telah diedit');
	// 	redirect(base_url('admin/pelanggan'),'refresh');
	// }
	// End masuk database
	// }

// Delete Pelanggan
	public function delete($id_pelanggan)
	{
		$data = array('id_pelanggan' => $id_pelanggan);
		$this->pelanggan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/pelanggan'),'refresh');
	}
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/admin/Pelanggan.php */