<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$pages = 'pages/home';
		$data['title'] = 'Home';
		$this->template->load('main' , $pages, $data);
	}
}
