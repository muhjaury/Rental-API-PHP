<?php

class Select_model extends CI_Model{

    public function select(){

        $this->load->database();

        $tr = $this->input->get('tempat');
        $nm = $this->input->get('mobil');
        $error = 'No Data';

        if (empty($tr) AND empty($nm)) {
        	$sql = "SELECT about.ntempat, rental.nmobil, rental.harga, about.alamat, about.no_telp, rental.status
					FROM about
					INNER JOIN rental ON about.foreign_id_u = rental.foreign_id_u;";	
        }
        elseif (empty($nm)) {
        	$sql = "SELECT about.ntempat, rental.nmobil, rental.harga, about.alamat, about.no_telp, rental.status
					FROM about
					INNER JOIN rental ON about.foreign_id_u = rental.foreign_id_u
					WHERE about.ntempat LIKE '%$tr%';";	
        }
        elseif (empty($tr)) {
        	$sql = "SELECT about.ntempat, rental.nmobil, rental.harga, about.alamat, about.no_telp, rental.status
					FROM about
					INNER JOIN rental ON about.foreign_id_u = rental.foreign_id_u
					WHERE rental.nmobil LIKE '%$nm%';";	
        }
        else {
			$sql = "SELECT about.ntempat, rental.nmobil, rental.harga, about.alamat, about.no_telp, rental.status
					FROM about
					INNER JOIN rental ON about.foreign_id_u = rental.foreign_id_u
					WHERE about.ntempat LIKE '%$tr%' AND rental.nmobil LIKE '%$nm%';";
        }
        
			$result = $this->db->query($sql);
			$data = $result->result_array();
        
		if (empty($data)) {
			return $error;
		} else {
			return $data;
		}
		
        
    
    }

}