<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

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

	function __construct() {
        parent::__construct();
        $this->lang->load('auth', $this->Settings->language);
        $this->load->model('auth_model');
        $this->load->library('ion_auth');
    }

	public function index()
	{
        $this->data['page_title'] = lang('login');
        $this->load->view($this->theme.'home/index', $this->data);
        $this->load->view($this->theme.'home/main', $this->data);
        $this->load->view($this->theme . 'footer');

	}
}
