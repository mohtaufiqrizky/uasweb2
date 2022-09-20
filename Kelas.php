<?php
defined('BASEPATH') OR exit("No direct script access allowed");
class Kelas extends CI_Controller{
    // inisialisasi model kelas di method__construct
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Tbl_kelas_model");
    }
    function tampilkan_data(){
        $data['kelas'] = $this->Tbl_kelas_model->ambil_data()->result();
        $this->load->view("data_kls.php",$data);
    }
}