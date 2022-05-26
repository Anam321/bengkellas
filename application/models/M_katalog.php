<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_katalog extends CI_Model
{


    public function get_dataproduk()
    {
        $this->db->select('*');
        $this->db->from('ref_produk');
        $this->db->order_by('produk_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_kategori()
    {
        $this->db->select('*');
        $this->db->from('tweb_kategori');
        // $this->db->order_by('kategori', 'DESC');

        $query = $this->db->get();
        return $query;
    }

    public function orderbykategori($kategori)
    {
        $this->db->select('*');
        $this->db->from('ref_produk');
        $this->db->where('kategori', $kategori);
        // $this->db->order_by('produk_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_prod($slug)
    {
        $this->db->select('*');
        $this->db->from('ref_produk');
        $this->db->where('slug', $slug);

        $query = $this->db->get();
        return $query;
    }
    function get_foto($id)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('produk_id', $id);

        $query = $this->db->get();
        return $query;
    }



    public function get_artikel()
    {
        $this->db->select('*');
        $this->db->from('artikel a');
        $this->db->order_by('artikel_id', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get();
        return $query;
    }











    public function get_gallery()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('token', 1);
        $this->db->order_by('gallery_id', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get();
        return $query;
    }
    public function get_bsproduk()
    {
        $this->db->select('*');
        $this->db->from('gallery a');
        $this->db->join('ref_produk b', 'a.produk_id=b.produk_id');
        $this->db->where('a.token', 2);
        $this->db->order_by('gallery_id', 'DESC');
        // $this->db->limit(12);
        $query = $this->db->get();
        return $query;
    }
    public function get_testimoni()
    {

        $this->db->select('*');
        $this->db->from('testimoni');
        $this->db->where('is_active', 1);
        $this->db->order_by('id_testi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    // public function get_artikel()
    // {
    //     $this->db->select('*');
    //     $this->db->from('artikel a');
    //     $this->db->order_by('artikel_id', 'DESC');
    //     $this->db->limit(12);
    //     $query = $this->db->get();
    //     return $query;
    // }
























    public function get_slideparent()
    {

        $query = $this->db->query("select * from set_slider where slid_id = 1 ");
        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'slid_id' => $row->slid_id,
                'judul_slid' => $row->judul_slid,
                'paragraf' => $row->paragraf,
                'link' => $row->link,
                'gambar' => $row->gambar,
            );
        }
        return $data;
    }
    public function get_produk()
    {

        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('is_active', 1);
        $this->db->order_by('produk_id', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query;
    }
    public function get_histori()
    {

        $this->db->select('*');
        $this->db->from('histori');
        $this->db->order_by('histori_id', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get();
        return $query;
    }


    public function get_roadmap()
    {

        $this->db->select('*');
        $this->db->from('road_map');

        $query = $this->db->get();
        return $query;
    }

    public function insertMenghubungi($data)
    {
        $this->db->insert('klikwa', $data);
    }
    public function input_visit($data)
    {
        $this->db->insert('visitor', $data);
    }
}
