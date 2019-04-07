<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->library('upload');
        $this->load->model('madmin');
        $this->load->library('session');

        if($this->session->userdata('status') != "login"){
            redirect('login/');
        }
    }
    public function index()
    {
        $data['main_content']   =  'admin/beranda';
        $this->load->view('admin/template',$data); 
    }

    public function input()
    {    
        $data['kategori']       = $this->madmin->get_kategori();
        $data['main_content']   = 'admin/input_data';
        $this->load->view('admin/template',$data);
    }

     public function transaksi()
     {
        $data['data_transaksi'] = $this->madmin->get_transaksi();
        $data['main_content']   = 'admin/v_transaksi';
        $this->load->view('admin/template',$data);     
    }

    public function pengembalian()
     {
        $data['data_transaksi'] = $this->madmin->get_pengembalian();
        $data['main_content']   = 'admin/v_pengembalian';
        $this->load->view('admin/template',$data);     
    }


     public function peminjam()
     {
        $data['data_peminjam']      = $this->madmin->get_all_peminjam();
        $data['main_content']   = 'admin/v_peminjam';
        $this->load->view('admin/template',$data);     
    }


    public function produk()
    {
        $data['msg']       = $this->session->flashdata('msg');
         //create data array
        $data['data_produk']      = $this->madmin->get_all_produk();
        //render view with data
        $data['main_content']   = 'admin/v_produk';
        $this->load->view('admin/template',$data);
    }    

    public function kamera()
    {
         //create data array
        $data['data_produk']      = $this->madmin->getKamera();
        //render view with data
        $data['main_content']   = 'admin/v_kamera';
        $this->load->view('admin/template',$data);
    }   

    public function aksesoris()
    {
         //create data array
        $data['data_produk']      = $this->madmin->getAksesoris();
        //render view with data
        $data['main_content']   = 'admin/v_aksesoris';
        $this->load->view('admin/template',$data);
    }   


    public function drone()
    {
         //create data array
        $data['data_produk']      = $this->madmin->getDrone();
        //render view with data
        $data['main_content']   = 'admin/v_drone';
        $this->load->view('admin/template',$data);
    }   

    //insert data
    public function insert_data(){
            $config['upload_path']      = './assets/admin/img/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['max_height']       = '3000';       
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                    $error = $this->upload->display_errors();
                }else{
                    $gambar=$this->upload->file_name;
                }
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar2')){
                    $gambar2="";
                    $error = $this->upload->display_errors();
                }else{
                    $gambar2=$this->upload->file_name;
                }
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar3')){
                    $gambar3="";

                    $error = $this->upload->display_errors();
                }else{
                    $gambar3=$this->upload->file_name;
                }
                    $data = array(
                    'merk'          => $this->input->post('merk'),
                    'spesifikasi'   => $this->input->post('spesifikasi'),
                    'id_kategori'   => $this->input->post('jenis'),
                    'harga'         => $this->input->post('harga'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'gambar'        => $gambar,
                    'gambar2'       => $gambar2,
                    'gambar3'       => $gambar3   
                );

            $this->madmin->insert_db_produk($data);
            redirect('Admin/produk');

    }

    public function edit()
    {
         $id_produk = $this->uri->segment(3);
    
          $row = $this->madmin->get_produk($id_produk);
          $data['id_produk']     = $id_produk;
          $data['merk']          = $row->merk;
          $data['gambar']        = $row->gambar;
          $data['gambar2']       = $row->gambar2;
          $data['gambar3']       = $row->gambar3;
          $data['spesifikasi']   = $row->spesifikasi;
          $data['harga']         = $row->harga;
          $data['deskripsi']     = $row->deskripsi;

        $data['main_content']   = 'admin/edit_data';
        $this->load->view('admin/template',$data);
    }

    public function edit_transaksi()
    {
         $id_transaksi = $this->uri->segment(3);
    
          $row = $this->madmin->get_row_transaksi($id_transaksi);
          $data['id_transaksi']  = $id_transaksi;
          $data['nama']          = $row->nama;
          $data['email']         = $row->email;
          $data['produk']        = $row->merk;
          $data['tgl_masuk']     = $row->tgl_masuk;
          $data['tgl_kembali']   = $row->tgl_kembali;
          $data['total_biaya']   = $row->total_biaya;
          $data['status']   = $row->status;

        $data['main_content']   = 'admin/edit_transaksi';
        $this->load->view('admin/template',$data);
    }

    public function simpan_pengembalian(){
        $data          = $this->input->post(); 
        $proses_update = $this->madmin->proses_pengembalian($data);
        $proses_denda  = $this->madmin->proses_denda($data);
        if ($proses_update) {
            $out['response'] = 'sukses';
        }else{
            $out['response'] = 'gagal';
        }

        echo json_encode($out);
    }

    public function update($id_produk)
    {
         $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil di update.</div>');

                $param=array(
                    'merk'              => $this->input->post('merk'),
                    'spesifikasi'       => $this->input->post('spesifikasi'),
                    'harga'             => $this->input->post('harga'),
                    'deskripsi'         => $this->input->post('deskripsi')
                );

                $proses = $this->madmin->update_data($param,$id_produk);
                redirect('admin/produk');
    }

    public function update_gambar($id_produk)
    {
         $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Data berhasil di update.</div>');

            $config['upload_path']      = './assets/admin/img/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['max_height']       = '3000';       
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";

                    $error = $this->upload->display_errors();
                }else{
                    $gambar=$this->upload->file_name;
                }

               
                    $data = array(
                    'gambar'        => $gambar
                  
                    
                );

            $this->madmin->update_data_gambar($data,$id_produk);
            redirect('Admin/produk');
    }

    public function delete()
    {
        $id_produk   = $this->uri->segment(3);
        
        $this->madmin->delete_data($id_produk);
        redirect('admin/produk');
    }

    public function delete_user()
    {
        $id_pembeli   = $this->uri->segment(3);
        
        $this->madmin->delete_pembeli($id_pembeli);
        redirect('admin/peminjam');
    }

      public function delete_pengembalian()
    {
        $id_pengembalian   = $this->uri->segment(3);
        
        $this->madmin->delete_data_pengembalian($id_pengembalian);
        redirect('admin/pengembalian');
    }

    public function delete_tr()
    {
        $id_transaksi   = $this->uri->segment(3);
        
        $this->madmin->delete_data_transaksi($id_transaksi);
        redirect('admin/transaksi');
    }

}