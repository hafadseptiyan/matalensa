<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model
{
    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }

    function get_transaksi()
    {
        $this->db->select('*');    
        $this->db->from('transaksi');
        $this->db->join('tbl_produk', 'transaksi.id_produk = tbl_produk.id_produk','left');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli','left');
        $this->db->where('transaksi.status != ','Kembali');
        $this->db->order_by('id_transaksi','DESC');
        $query = $this->db->get();
        return $query->result();    
    } 

    function get_pengembalian()
    {
        $this->db->select('*');    
        $this->db->from('pengembalian');
        $this->db->join('transaksi', 'pengembalian.id_transaksi = transaksi.id_transaksi','left');
        $this->db->join('tbl_produk', 'transaksi.id_produk = tbl_produk.id_produk','left');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli','left');
        $this->db->where('transaksi.status != ','Masuk');
        $query = $this->db->get();
        return $query->result();
        
    }  


    function get_row_transaksi($id_transaksi)
    {
        $this->db->select('*');    
        $this->db->from('transaksi');
        $this->db->join('tbl_produk', 'transaksi.id_produk = tbl_produk.id_produk','left');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli','left');
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->order_by('id_transaksi','DESC');
        $query  = $this->db->get();
        return $query->row();
        
    }   

    function get_produk($id_produk)
    {
      $query  =   $this->db->where('id_produk', $id_produk);
      $query  =   $this->db->get('tbl_produk');
      return $query->row();
    }

    function get_kategori()
    {
        $query = $this->db->order_by('id_kategori','DESC')->get('kategori');
        return $query->result();
    }

     function getKamera()
    {
        $query = $this->db->order_by('id_produk','DESC')->get_where('tbl_produk', array('id_kategori' => '1'));
        return $query->result();
    }
    

    function getAksesoris()
    {
        $query = $this->db->order_by('id_produk','DESC')->get_where('tbl_produk', array('id_kategori' => '3'));
        return $query->result();
    }

    function getDrone()
    {
        $query = $this->db->order_by('id_produk','DESC')->get_where('tbl_produk', array('id_kategori' => '2'));
        return $query->result();
    }

    function get_all_produk()
    {
        $query = $this->db->order_by('id_produk','DESC')->get('tbl_produk');
        return $query->result();
    }

    function get_all_peminjam()
    {
        $query = $this->db->order_by('id_pembeli','DESC')->get('pembeli');
        return $query->result();
    }

    public function insert_db_produk($data)
    {
        $this->db->insert('tbl_produk',$data);
    }

    function update_data($param,$id_produk)
    {
        $this->db->where('id_produk',$id_produk);
        $this->db->update('tbl_produk',$param);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function update_data_gambar($data,$id_produk)
    {
        $this->db->where('id_produk',$id_produk);
        $this->db->update('tbl_produk',$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    
    function proses_pengembalian($data){
        $param['status'] = 'Kembali';
        $this->db->where('id_transaksi',$data['id_transaksi']);
        $this->db->update('transaksi',$param);
        if($this->db->affected_rows()>0)
        {
            return true; 
        }
        else
        {
            return false;
        }
    }

    function proses_denda($data){
        $this->db->where('id_transaksi', $data['id_transaksi']);
            $get_data = $this->db->get('transaksi')->row();

            $tgl_skrg       = date('Y-m-d');
            $tgl_mulai      = new DateTime($get_data->tgl_kembali);
            $tgl_selesai    = new DateTime($tgl_skrg);
            $variable       = date_diff($tgl_mulai,$tgl_selesai);
            if ($variable->format("%R%a") > 0) {
                $jumlah_denda   = $variable->days * 5000;
                $keterlambat    = $variable->days;
            }else{
                $jumlah_denda   = 0;
                $keterlambat    = 0;
            }

            $data_insert['id_transaksi']         =  $get_data->id_transaksi;
            $data_insert['tgl_pengembalian']     =  date('Y-m-d');
            $data_insert['tgl_rencana_kembali']  =  $get_data->tgl_kembali;
            $data_insert['denda']                =  $jumlah_denda;
            $data_insert['jumlah_hari_terlambat']=  $keterlambat;
            $data_insert['total_biaya_akhir']    =  $jumlah_denda + $get_data->total_biaya;
            $this->db->insert('pengembalian',$data_insert);

            if($this->db->affected_rows()>0)
            {
                return true; 
            }
            else
            {
                return false;
            }
    }

    function delete_data($id_produk)
    {
        $this->db->delete('tbl_produk',array('id_produk' =>$id_produk ));
        return;
    }

    function delete_pembeli($id_pembeli)
    {
        $this->db->delete('pembeli',array('id_pembeli' =>$id_pembeli ));
        return;
    }

    function delete_data_pengembalian($id_pengembalian)
    {
        $this->db->delete('pengembalian',array('id_pengembalian' =>$id_pengembalian ));
        return;
    }

     function delete_data_transaksi($id_transaksi)
    {
        $this->db->delete('transaksi',array('id_transaksi' =>$id_transaksi ));
        return;
    }

}