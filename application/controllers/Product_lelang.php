<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_lelang extends CI_Controller {

	public function index()
	{
		$pages = 'pages/product';
		$data['title'] = 'Product Lelang';
		$this->template->load('main' , $pages, $data);
	}
}
