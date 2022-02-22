<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent :: __construct();
		check_not_login();
		$this->load->model('kontrak_m');
	}


	// ini adalah function load pertama
	public function index()
	{
		$data['row'] = $this->kontrak_m->get();
		$this->template->load('template' , 'dashboard' , $data );
	}



	
}
