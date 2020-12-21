<?php

class Deletemobil_model extends CI_Model{

    public function deletemobil($id){

        //Load Form
    	$this->load->helper('form');
        //Koneksi Database
        $this->load->database();


        //Variable input data
        $nm = $this->input->post('nmobil');
        //Pesan error
        $error = 'Error Parameter Data';

        //Kalau misal inputan tidak ada, atau kosong. Maka muncul pesan error
        if (empty($nm)) {
        	$result = $error;
        }
        //Kalau tidak kosong ji, berarti bisa ji menghapus data
        else {
            $sql = "DELETE FROM rental
                    WHERE foreign_id_u = '$id' AND nmobil = '$nm'";
                $this->db->query($sql);
                $result = array(
                'nmobil'=>$nm
                );
        }

        return $result;    
    }
}
