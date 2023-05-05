<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bind_saya extends CI_Controller {

	public function index()
	{
		$pages = 'pages/bind';
		$data['title'] = 'Bind';
		$this->template->load('main' , $pages, $data);
	}
}
