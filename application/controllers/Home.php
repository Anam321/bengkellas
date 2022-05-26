<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home', 'home');
        $this->load->model('admin/Profil_m', 'profil');

        $autoload['helper'] = array('text');
        $this->load->library('session');
    }
    public function index()
    {
        // $ip    = $this->input->ip_address(); // Mendapatkan IP user
        // $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        // $waktu = time(); //
        // $timeinsert = date("Y-m-d H:i:s");

        // // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        // $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        // $ss = isset($s) ? ($s) : 0;


        // // Kalau belum ada, simpan data user tersebut ke database
        // if ($ss == 0) {
        //     $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        // }

        // // Jika sudah ada, update
        // else {
        //     $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        // }


        $data = [

            'judul' => $this->profil->get_profile('nama'),
            'perusahaan' => $this->profil->get_profile('nama'),
            'logo' => $this->profil->get_profile('logo'),
            'alamat' => $this->profil->get_profile('alamat'),
            'whatsap' => $this->profil->get_kontak('whatsap'),
            'facebook' => $this->profil->get_kontak('facebook'),
            'instagram' => $this->profil->get_kontak('instagram'),
            'email' => $this->profil->get_kontak('email'),
            'telpon' => $this->profil->get_kontak('telpon'),
            'foto' => $this->profil->get_profile('foto'),

            'slide' => $this->home->get_slide()->result(),
            'dataKatalog' => $this->home->get_katalog()->result(),
            'gallery' => $this->home->get_gallery()->result(),
            'bsproduk' => $this->home->get_bsproduk()->result(),
            'testimoni' => $this->home->get_testimoni()->result(),
            'artikel' => $this->home->get_artikel()->result(),
            'deskripsi' => $this->profil->get_profile('deskripsi'),




        ];



        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('pages/home_v', $data);
        $this->load->view('layout/footer', $data);
    }
    // public function klikwa()
    // {
    //     $ip    = $this->input->ip_address(); // Mendapatkan IP user
    //     $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
    //     $timeinsert = date("Y-m-d H:i:s");
    //     $data = array(
    //         'klik' => 1,
    //         'ip' => $ip,
    //         'date' => $date,
    //         'time' => $timeinsert,
    //     );
    //     $this->home->insertMenghubungi($data);
    // }
}
