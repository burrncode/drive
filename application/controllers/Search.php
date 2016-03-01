<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller
{

    function __construct() {
        parent::__construct();
/*

        if (!$this->loggedIn) {
            redirect('login');
        }
*/
        $this->load->library('form_validation');
        //$this->load->model('search_model');
    }

    public function index()
    {
        $this->data['page_title'] = "Seach Trip";
        $this->page_construct('categories/add', $this->data);
    }
}