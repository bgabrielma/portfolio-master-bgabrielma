<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //Loading url helper
		$this->load->helper('url');

		//connecting to database
		$this->load->database();

		$data = [
			'page_title' => 'Portefólio - trabalhos realizados',
			'data_bd' => $this->db->get('work')->result()
		];

		// render views
		$this->load->view('pages/header', $data);
		$this->load->view('pages/works', $data);
		$this->load->view('pages/footer');
	}
}