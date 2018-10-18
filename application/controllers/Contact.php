<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    
	public function index()
	{
        //Loading url helper
		$this->load->helper('url');

		// render views
		$this->load->view('pages/header');
		$this->load->view('pages/contact');
		$this->load->view('pages/footer');
	}
}
