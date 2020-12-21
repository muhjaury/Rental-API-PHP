<?php

class default_model extends CI_Model{

  public function index(){

    $this->load->database();

    $sql = "SELECT * FROM user;";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  
}


?>