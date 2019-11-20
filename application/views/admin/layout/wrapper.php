<?php 
// Proteksi Halaman Admin, Dengan fungsi cek login yang ada di simple login
$this->simple_login->cek_login();

// Gabungkan Semua Bagian Layout Menjadi Satu
require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');
