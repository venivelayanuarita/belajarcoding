<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Laundry extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_laundry');
        $this->load->helper('url');
        $this->load->model('m_paket');
    }
    
    public function index(){
        $data['data'] =$this->m_laundry->tampil_data();
        $this->load->view('laundry/index', $data);
    }

        public function tambah(){
         $data['kategori_paket']=$this->m_paket->tampil_data();
        $this->load->view('laundry/tambah', $data);;
    }

    public function simpan(){
        $data = array(
            'nama_customer'=> $this->input->post('nama_customer'),
            'alamat'=>$this->input->post('alamat'),
            'no_telp'=>$this->input->post('no_telp'),
            'tgl_terima'=>$this->input->post('tgl_terima'),
            'tgl_selesai'=>$this->input->post('tgl_selesai'),
            'berat'=>$this->input->post('berat'),
            'harga'=>$this->input->post('harga'),
            'id_paket'=>$this->input->post('id_paket'),
        );

        $this->m_laundry->input_data($data);
        redirect('laundry');
        echo json_encode(array("status" => TRUE));
    }  
}