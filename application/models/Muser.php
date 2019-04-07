<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model
{

    function getKamera()
    {
        $query = $this->db->get_where('tbl_produk', array('id_kategori' => '1'));
        return $query->result();
    }

    function getAksesoris()
    {
        $query = $this->db->get_where('tbl_produk', array('id_kategori' => '3'));
        return $query->result();
    }

    
     function get_row_transaksi($kode_transaksi)
    {
        $this->db->select('*');    
        $this->db->from('transaksi');
        $this->db->join('tbl_produk', 'transaksi.id_produk = tbl_produk.id_produk','left');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli','left');
        $this->db->where('kode_transaksi', $kode_transaksi);
        $query  = $this->db->get(); 
        return $query->row();
        
    }  

    function getDrone()
    {
        $query = $this->db->get_where('tbl_produk', array('id_kategori' => '2'));
        return $query->result();
    }

    function get_produk($id_produk)
    {
      $query  =   $this->db->where('id_produk', $id_produk);
      $query  =   $this->db->get('tbl_produk');
      return $query->row();
    }

    function insert_db_user($data)
    {
        $this->db->insert('pembeli',$data);
    }


    function insert_db_transaksi($data)
    {
        $this->db->insert('transaksi',$data);
    }
   
}