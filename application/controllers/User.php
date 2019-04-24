<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_paket');
        $this->load->helper('url');
   
    }
    
    public function index(){
      
       

        $data['data'] =$this->m_paket->tampil_data();
        $this->load->view('user/index', $data);

    }

     public function simpan(){
        $data = array(
            'nama_customer'=> $this->input->post('nama_customer'),
            'id_paket'=>$this->input->post('id_paket'),
            'alamat'=>$this->input->post('alamat'),
            'no_telp'=>$this->input->post('no_telp'),
            'deskripsi'=>$this->input->post('deskripsi'),

        );
        $this->buku_model->input_data($data);
        redirect('buku');
        echo json_encode(array("status" => TRUE));
    }


  
}