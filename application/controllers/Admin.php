<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	if($this->session->userdata('login_admin')!=TRUE){
			redirect('login','refresh');
		}
	$this->load->model('m_user');
}
	public function index()
	{
		
		$this->load->view('beranda');		
	}
	public function tambah()
	{
		$data['data'] =$this->m_user->tampil_data();
        $this->load->view('admin/tambah', $data);
	
	}
	public function tambahuser()
	{
		
		$this->load->view('admin/user');		
	}

	  public function simpan(){
        $data = array(
            'nama_admin'=> $this->input->post('nama_admin'),
            'username'=>$this->input->post('username'),
            'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'alamat'=>$this->input->post('alamat'),
        );
        
        $this->m_user->input_data($data);
        redirect('admin/tambah');
        echo json_encode(array("status" => TRUE));
    }

     public function edit($id){

        $data['data']= $this->m_user->spesifik_data($id);
        $this->load->view('admin/edit',$data);
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
            'nama_admin'=> $this->input->post('nama_admin'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'alamat'=>$this->input->post('alamat'),
        
        );
        $this->m_user->update_data($data, $id);
        redirect('admin/tambah');
        echo json_encode(array("status" => TRUE));
    }
    function hapus($id){
        $this->m_user->hapus_data($id);
        redirect('admin/tambah');
    }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}


}



/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */