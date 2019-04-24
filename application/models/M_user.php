<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
		public function __construct()
    {
        $this->table = 'admin';

        parent::__construct();
    }

		public function get_login()
		{
			return $this->db
					->where('username',$this->input->post('username'))
					->where('password',$this->input->post('password'))
					->get('admin');
		}

	function tampil_data(){

        $query =$this->db->get($this->table);

        return $query->result();
    }

     function input_data($data){
        $this->db->insert($this->table, $data);
    }
      function spesifik_data($id){
        $query = $this->db->get_where($this->table,array('id'=> $id));
        return $query->row();
    }
    function update_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    function hapus_data($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }



		public function masuk()
		{
		$nama_admin=$this->input->post('nama_admin');
		$alamat=$this->input->post('alamat');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data_simpan=array(
			'nama_admin'=>$nama_admin,
			'alamat'=>$alamat,
			'username'=>$username,
			'password'=>$password
			);
		$this->db->insert('admin',$data_simpan);
		if($this->db->affected_rows()>0){
			return TRUE;
		} else {
			return FALSE;
		}
		}
		
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */