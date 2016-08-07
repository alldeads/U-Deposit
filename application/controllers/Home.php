<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* NAME : Dashboard Controller
* TYPE : Controller
* DEVELOPER : Filjumar Jumamoy
* DATE DEVELOPED: 
* DESCRIPTION: Home / Dashboard
*/

class Home extends CI_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('MdDash');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
	} 
	//index mail
	public function index()
	{
	            $this->load->view("pages/home/home");
	}
}

;?>