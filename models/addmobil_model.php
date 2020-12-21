<?php

class Addmobil_model extends CI_Model{

    public function addmobil($id){


        $this->load->helper('form');

        // koneksi db
        $this->load->database();

        // S: soal gambar
        
        // konfigurasi
        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        
        // load library upload
        $this->load->library('upload', $config);
        
        // eksekusi upload
        $this->upload->do_upload('foto');

        // ambil nama foto
        $f = $_FILES['foto']['name'];

        // E: soal gambar

        // tangkap data input user
        $nm = $this->input->post('mobil');
        $h = $this->input->post('harga');
        $s = $this->input->post('status');
        $error = 'Error Parameter Data';

        if (empty($nm) OR empty($h) OR empty($s)) {
            $result = $error;
        }
        elseif ($s == 'Ada' OR $s == 'Terpakai') {
        // buat query
        $sql = "INSERT INTO rental (foreign_id_u, nmobil, fotomobil, harga, status)
                VALUES ('$id', '$nm', '$f', '$h', '$s');";

        // eksekusi querynya
        $this->db->query($sql);

        $result['results'] = array(
                'Nama Mobil'=>$nm,
                'Foto' =>$f,
                'Harga'=>$h,
                'Status'=>$s
            );
        }
        else {
            $result = $error;
        }
        return $result;     
    }
}
