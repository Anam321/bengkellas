<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_katalog', 'katalog');
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
            'artikel' => $this->katalog->get_artikel()->result(),


            'kategori' => $this->katalog->get_kategori()->result(),

        ];



        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('pages/katalog_v', $data);
        $this->load->view('pages/katalog_js');
        $this->load->view('layout/footer', $data);
    }

    public function listkatalog()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $produk = $this->katalog->get_dataproduk();
            $data = array();
            foreach ($produk as $row) {

                $list = ' <div class="col-md-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="' . base_url() . 'assets/upload/gallery/' . $row['foto'] . '" alt="">
                    <div class="card-body bg-white p-4">
                        <div class="d-flex align-items-center mb-3">
                            <a class="btn btn-primary" href="' . base_url() . 'katalog/detailproduk/' . $row['slug'] . '/' . $row['produk_id'] . '"><i class="fa fa-link"></i></a>
                           <a href="' . base_url() . 'katalog/detailproduk/' . $row['slug'] . '/' . $row['produk_id'] . '"> <h5 class="m-0 ml-3 text-truncate">' . $row['nama_produk'] . '</h5></a>
                        </div>
                       
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-eye text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> ' . $row['kategori'] . '</small>
                           
                        </div>
                    </div>
                </div>
            </div>';

                $data[] = $list;
            }

            echo json_encode($data);
        }
    }

    public function orderbykategori($kategori)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $produk = $this->katalog->orderbykategori($kategori);
            $data = array();
            foreach ($produk as $row) {

                $list = ' <div class="col-md-4 mb-4">
                                <div class="card border-0 mb-2">
                                    <img class="card-img-top" src="' . base_url() . 'assets/upload/gallery/' . $row['foto'] . '" alt="">
                                    <div class="card-body bg-white p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <a class="btn btn-primary" href="' . base_url() . 'katalog/detailproduk/' . $row['slug'] . '/' . $row['produk_id'] . '"><i class="fa fa-link"></i></a>
                                        <a  href="' . base_url() . 'katalog/detailproduk/' . $row['slug'] . '/' . $row['produk_id'] . '"> <h5 class="m-0 ml-3 text-truncate">' . $row['nama_produk'] . '</h5></a>
                                        </div>
                                    
                                        <div class="d-flex">
                                            <small class="mr-3"><i class="fa fa-eye text-primary"></i> Admin</small>
                                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> ' . $row['kategori'] . '</small>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>';

                $data[] = $list;
            }

            echo json_encode($data);
        }
    }


    public function detailproduk($slug, $id)
    {

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

            'detproduk' => $this->katalog->get_prod($slug)->result(),
            'lisfoto' => $this->katalog->get_foto($id)->result(),

        ];



        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('pages/detailproduk_v', $data);
        $this->load->view('pages/katalog_js');
        $this->load->view('layout/footer', $data);
    }
}
