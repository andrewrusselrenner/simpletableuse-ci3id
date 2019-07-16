<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Halaman index untuk controller ini.
	 * 
	 * Pemetaan ke alamat URL
	 * 		http://contoh.com/index.php/welcome
	 *	- atau -
	 * 		http://contoh.com/index.php/welcome/index
	 *	- or -
	 * Semenjak controller ini diatur sebagai controller bawaan di
	 * config/routes.php, halaman welcome ini akan tertampil di
	 * root domain, seperti http://contoh.com/
	 *
	 * Jadi, jika ada metode publik lainnya yang tidak diprefix dengan
	 * garis bawah (underscore) akan di petakan ke /index.php/welcome/<nama_metode>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/kepala');
		$this->load->view('welcome_message');
		$this->load->view('templates/kaki');
	}
}
