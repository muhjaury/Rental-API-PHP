<?php

class id_model extends CI_Model{
    public function getid($key){
        $this->load->database();
        $sql = "SELECT id_u
				FROM user
				WHERE or_key = '$key';";
        $result = $this->db->query($sql);
		$data = $result->result_array();
        return $data;
    }
}
