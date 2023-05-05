<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang_product extends CI_Controller {

	public function index()
	{
		$pages = 'pages/lelang';
		$data['title'] = 'Lelang Product';
		$this->template->load('main' , $pages, $data);
	}
}
