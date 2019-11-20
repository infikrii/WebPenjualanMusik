<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // Load data model user
        $this->CI->load->model('user_model');
	}

	// Fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		// Jika ada data user, maka create session login
		if($check) {
			$id_user			= $check->id_user;
			$nama				= $check->nama;
			$akses_level		= $check->akses_level;
			// Create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama',$nama);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level',$akses_level);
			// Redirect ke halaman admin yang diproteksi
			redirect(base_url('admin/dashboard'),'refresh');
		}else{
			// Kalau tidak ada, maka harus login lagi
			$this->CI->session->set_flashdata('warning', 'Username atau Password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	// Fungsi cek login
	public function cek_login()
	{
		// memeriksa session ada/belum, jika belum redirect ke halaman login
		if($this->CI->session->userdata('username') == "") {
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			redirect(base_url('login'),'refresh');
		}
	}

	// Fungsi logout
	public function logout()
	{
		// Membuang semua session yang telah di set pada saat login
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		// Setelah session di unset, redirect login
		$this->CI->session->set_flashdata('success', 'Anda berhasil logout');
		redirect(base_url('login'),'refresh');
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
