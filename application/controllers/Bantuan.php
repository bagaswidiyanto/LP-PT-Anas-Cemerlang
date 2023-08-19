<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        $deskripsi = $this->input->post('deskripsi');

        $this->db->query("INSERT INTO tbl_bantuan (nama,jenis_pekerjaan,telp,deskripsi) VALUES ('" . $nama . "','" . $jenis_pekerjaan . "','" . $telp . "','" . $deskripsi . "') ");

        $this->load->helper('url');
    }
}
