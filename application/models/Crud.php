<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {
var $tabel = "artikel";

    function count_artikel(){
        $query = $this->db->get($this->tabel)->num_rows();
        return $query;
    }

    function  count_artikel_search($orlike) {
        $this->db->or_like($orlike);
        $query = $this->db->get($this->tabel);
        return $query->num_rows();
    }

    function get_allartikel($batas =null,$offset=null,$key=null,$kat=null) {
    $this->db->from($this->tabel);
    $this->db->order_by("id", "DESC");
        if($batas != null){
           $this->db->limit($batas,$offset);
        }
        if ($key != null) {
           $this->db->or_like($key);
        }
        if ($kat != null) {
            $this->db->where($kat);
        }
        $query = $this->db->get();
     
        //cek apakah ada barang
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

     function  count_artikel_kategori($id) {
         $data = $this->db->query('Select *from artikel where kategori="'.$id.'"');
        return $data->num_rows();
    }


    // menghitun jumlah record dari sebuah tabel.
    public function countAll($tables){
        return $this->db->get($tables)->num_rows();
    }
    
    // menghitun jumlah record dari sebuah query.
    public function countQuery($query){
        return $this->db->get($query)->num_rows();
    }
    
    //enampilkan satu record brdasarkan parameter.
    public function kondisi($tables,$where)
    {
        $this->db->where($where);
        return $this->db->get($tables);
    }
    //menampilkan satu record brdasarkan parameter.
    public  function getByID($tables,$pk,$id){
        $this->db->where($pk,$id);
        return $this->db->get($tables);
    }


    public function getPost($where="")
    {
         $data = $this->db->query('Select *from artikel'.$where);
         return $data->result_array();
    }

    public function getKategori($where="")
    {
         $data = $this->db->query('Select *from kategori'.$where);
         return $data->result_array();
    }
    
    // Menampilkan data dari sebuah query dengan pagination.
    public function queryList($query,$limit,$page){
       
        return $this->db->query($query." limit ".$page.",".$limit."");
    }

    // memasukan data ke database.
    public function insert($tables,$data){
        $this->db->insert($tables,$data);
    }
    
    // update data kedalalam sebuah tabel
    public function update($tables,$data,$pk,$id){
        $this->db->where($pk,$id);
        $this->db->update($tables,$data);
    }
    
    // menghapus data dari sebuah tabel
    public function delete($tables,$pk,$id){
        $this->db->where($pk,$id);
        $this->db->delete($tables);
    }
}

