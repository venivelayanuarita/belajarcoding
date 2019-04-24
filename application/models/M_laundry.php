<?php

class M_laundry extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'tb_customer';

        parent::__construct();
    }
  function tampil_data(){
        $this->db->select('tb_customer.id_paket, nama_customer, alamat, no_telp,tgl_terima, tgl_selesai,berat,harga,nama_paket');
        $this->db->join('tb_paket', 'tb_paket.id= tb_customer.id_paket');
        $query =$this->db->get($this->table);

        return $query->result();
    }
    function jumlah_data(){
        $query=$this->db->get($this->table);

        return $query->num_rows();
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
}