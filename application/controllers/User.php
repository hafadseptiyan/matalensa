<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('muser');
        $this->load->library('session');
    }

    public function index()
   	{
        $data['kamera']         = $this->muser->getKamera();   
        $data['aksesoris']      = $this->muser->getAksesoris();   
        $data['drone']          = $this->muser->getDrone();   
        $data['main_content']   = 'user/beranda';
        $this->load->view('user/slider',$data);
        $this->load->view('user/template',$data);
    }

    public function aksesoris()
    {
        $data['aksesoris']      = $this->muser->getAksesoris();   
        $this->load->view('user/navbar',$data);
        $data['main_content']   = 'user/aksesoris';
        $this->load->view('user/template',$data);
    }

     public function kamera()
    {
        $data['kamera']      = $this->muser->getKamera();   
        $data['main_content']   = 'user/kamera';
       $this->load->view('user/navbar',$data);       
        $this->load->view('user/template',$data);
    }

    public function drone()
    {
        $data['drone']      = $this->muser->getDrone();   
        $data['main_content']   = 'user/drone';
        $this->load->view('user/navbar',$data);
        $this->load->view('user/template',$data);
    }

    public function checkout_transaksi($kode_transaksi)
    { 
          $row = $this->muser->get_row_transaksi($kode_transaksi); 
          $data['tgl_masuk']        = $row->tgl_masuk;
          $data['tgl_kembali']      = $row->tgl_kembali;
          $data['alamat']           = $row->alamat;
          $data['total_biaya']      = $row->total_biaya;
          $data['qrcode']           = $row->qrcode;
          $data['nama']             = $row->nama;
          $data['merk']             = $row->merk; 
      $this->load->view('user/checkout_transaksi',$data);
    }
  

    public function registrasi()
    {
      $data['msg']       = $this->session->flashdata('msg');
      $data['main_content'] = 'user/registrasi';
      $this->load->view('user/navbar',$data);
      $this->load->view('user/template',$data);
    }


    public function detail_produk($id_produk) 
    {
      $this->load->model('muser');
      
          $row = $this->muser->get_produk($id_produk);
          $data['merk']             = $row->merk;
          $data['harga']            = $row->harga;
          $data['deskripsi']        = $row->deskripsi;
          $data['spesifikasi']      = $row->spesifikasi;
          $data['gambar']           = $row->gambar;
          $data['gambar2']           = $row->gambar2;
          $data['gambar3']           = $row->gambar3;

          $data['main_content']             = 'user/detail_produk';
          $this->load->view('user/template', $data);

    }

    public function notif()
    {
      $this->load->view('user/notif');
    }

    //insert pembeli
    public function insert_user(){
                $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Anda telah terdaftar. Anda dapat memesan produk mata lensa. </div>');
                    $data = array(
                    'username'      => $this->input->post('username'),
                    'password'      => md5($this->input->post('pass')),
                    'nama'          => $this->input->post('nama'),
                    'email'         => $this->input->post('email'),
                    'jenis_kelamin' => $this->input->post('jenis'),
                    'telp'          => $this->input->post('telp')
                );

            $this->muser->insert_db_user($data);
            redirect('user/registrasi');
    }

    public function transaksi($id)
    {

          $this->load->model('muser');
          $row = $this->muser->get_produk($id);
          $data['merk']             = $row->merk;
          $data['harga']            = $row->harga;
          $data['gambar']           = $row->gambar;  
          $data['id_produk']        = $id;
          $data['tgl_pinjam']       = date('Y-m-d');
          $data['tgl_kembali']      = strtotime('+2 day',strtotime($data['tgl_pinjam']));
          $data['tgl_kembali']      = date('Y-m-d',$data['tgl_kembali']);
          $data['main_content']     = 'user/transaksi';
          $this->load->view('user/template', $data);
    }

    public function insert_transaksi()
    {
      $id_transaksi = $this->uri->segment(3);
      $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"> Pesanan anda telah berhasil tersimpan, silahkan cetak kartu transaksi anda .</div>');

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $kode_transaksi = 'MTL_'.date('ymdhis');

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/user/img/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$kode_transaksi.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $kode_transaksi; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

      $data = array(
                    'id_produk'     => $this->input->post('id_produk'),
                    'id_pembeli'    => $this->input->post('id_pembeli'),
                    'kode_transaksi'=> $kode_transaksi,
                    'alamat'        => $this->input->post('alamat'),
                    'tgl_masuk'     => $this->input->post('tgl_pinjam'),
                    'tgl_kembali'   => $this->input->post('tgl_kembali'),
                    'total_biaya'   => $this->input->post('harga_total'),
                    'alamat'        => $this->input->post('alamat'),
                    'status'        => $this->input->post('status'),
                    'qrcode'        => $image_name
                );

            $this->muser->insert_db_transaksi($data);
            $this->checkout_transaksi($kode_transaksi);          
    }

    public function login()
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $id       = $this->input->post('id');

      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $get_data = $this->db->get('pembeli')->row();
      // echo $this->db->last_query();
      // exit();
      if (!empty($get_data)) {
        $session_data = array(
            'username' => $get_data->username,
            'email' => $get_data->email,
            'telp' => $get_data->telp,
            'id_pembeli' => $get_data->id_pembeli,
            'nama' => $get_data->nama
            );
        $this->session->set_userdata('logged_in', $session_data);
        
       $this->transaksi($id);

      }else{
          
          $this->load->view('user/notif');

      }

    }

    
}