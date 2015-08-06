<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array( 	'page_title' => "STFACE | COMSC Documentation" ,
						'content_title' => "CODE - COMSC Documentation" );

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('code-content', $data);
		$this->load->view('footer');
	}
}