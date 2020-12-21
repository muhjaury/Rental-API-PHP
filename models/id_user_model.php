<?php

class id_user_model extends CI_Model{
    public function getid($email){
        $this->load->database();
        $sql = "SELECT id_u
				FROM user
				WHERE email = '$email';";
        $result = $this->db->query($sql);
		$data = $result->result_array();
        return $data;
    }
}
