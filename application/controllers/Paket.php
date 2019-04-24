<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Paket extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_paket');
        $this->load->helper('url');
   
    }
    
    public function index(){
      
       

        $data['data'] =$this->m_paket->tampil_data();
        $this->load->view('paket/index', $data);

    }

        public function tambah(){
        $this->load->view('paket/tambah');
    }


    public function simpan(){
        $data = array(
            'nama_paket' => $this->input->post('nama_paket'),
            'harga_perkilo' => $this->input->post('harga_perkilo')

            
        );
        $this->m_paket->input_data($data);
        redirect('paket');
    }



    public function edit($id){
        $data['data']=$this->m_paket->spesifik_data($id);

        $this->load->view('paket/edit',$data);
    }


    public function update(){
            $id = $this->input->post('id');
            // die($this->input->post('nama'));
            $data = array
            (
                'nama_paket' => $this->input->post('nama_paket'),
            'harga_perkilo' => $this->input->post('harga_perkilo')
                
            );
            $this->m_paket->update_data($data, $id);
            redirect('paket');
        }   


        public function hapus($id){
            $this->m_paket->hapus_data($id);
            redirect('paket');
        
        }

  
}