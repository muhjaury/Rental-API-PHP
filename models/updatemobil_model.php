<?php
//Nama Kontroler
class Updatemobil_model extends CI_Model{
    //Nama Fungsi
    public function updatemobil($id){

        //Load helper form untuk pengisian form, seperti di postman nnt bagian body form yang terisi
    	$this->load->helper('form');
        //Untuk koneksi database sesuai yang telah dikonfigurasi di config database
        $this->load->database();

        //Variable inputan
        $nm = $this->input->post('nmobil');
        $h = $this->input->post('harga');
        $s = $this->input->post('status');        
        $error = 'Error Parameter Data';

        //Kondisi kalau misal inputan kosong semua
        if (empty($nm) OR empty($h) OR empty($s)) {
            //Maka terjadi Error
        	$result = $error;
        }
        //Kalau inputan harga sama dengan atau lebih besar dari 100000 DAN status sama dengan "ADA" maka bisa ji mengupdate
        elseif ($h >= 100000 AND $s == 'Ada') {
        	$sql = "UPDATE rental
            		SET harga = '$h', status = '$s'
                    WHERE foreign_id_u = '$id' AND nmobil = '$nm'";
            $this->db->query($sql);
            $result = array(
                'Nama Mobil'=>$nm,
                'Harga Terbaru'=>$h,
                'Status Terbaru'=>$s
            );
        }
        //Kalau inputan harga sama dengan atau lebih besar dari 100000 DAN status sama dengan "Terpakai" maka bisa ji mengupdate
        elseif ($h >= 100000 AND $s == 'Terpakai') {
        	$sql = "UPDATE rental
            		SET harga = '$h', status = '$s'
                    WHERE foreign_id_u = '$id' AND nmobil = '$nm'";
            $this->db->query($sql);
            $result = array(
                'Nama Mobil'=>$nm,
                'Harga Terbaru'=>$h,
                'Status Terbaru'=>$s
            );
        }
        //Kalau misal harga dibawah 1000000, tidak bisa mengupdate
        elseif ($h < 100000) {
        	$result = 'Harga Tidak Valid';
        }
        //Selain dari kondisi yang bisa mengupdate diatas, akan terjadi Error
        else {
            //Disini kusisipkan pesan errornya
        	$result = $error;
        }
        
        //Kasih kembali Variable Error untuk hasil dari seluruh pengambilan keputusan
		return $result; 
    
    }
}
