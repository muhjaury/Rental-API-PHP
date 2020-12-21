<?php

class key_model extends CI_Model{

    public function cek($key){

        // koneksi db
        $this->load->database();

            $sql = "SELECT COUNT(or_key) as jumlah FROM user where or_key = '$key' LIMIT 1;";
            $result = $this->db->query($sql);
            $data = $result->result_array();
            foreach ($data as $row) {
            	$final = $row['jumlah'];
            }
        
        return $final;
    
    }

}
