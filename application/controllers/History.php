<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function index()
	{
		$pages = 'pages/history';
		$data['title'] = 'History';
		$this->template->load('main' , $pages, $data);
	}
}
