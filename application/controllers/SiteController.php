<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}

	public function contact()
	{
		$this->load->view('contact');
	}
}
