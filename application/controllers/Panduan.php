<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Panduan extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_panduan');
        $this->load->helper('url');
   
    }
    
    public function index(){
        $this->load->view('panduan/index');

    }

}