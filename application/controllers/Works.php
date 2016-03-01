<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends My_Controller {

	function __construct() 
	{
		parent::__construct();

		$this->lang->load('auth', $this->Settings->language);
		$this->load->model('auth_model');
        $this->load->library('ion_auth');
	}

	public function index()
	{
        $this->data['page_title'] = lang('login');
        $this->page_construct('works/index', $this->data);
	}
}
