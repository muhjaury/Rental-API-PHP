<?php

class authgenerate_model extends CI_Model{

  public function auth($auth){

    $this->load->database();
    $id = $this->session->userdata('id');
    $sql = "SELECT COUNT(or_key) AS sum FROM user WHERE or_key = '$auth';";
    $result = $this->db->query($sql);
    $data = $result->result_array();
    foreach ($data as $row) {
      $data = $row['sum'];
    }
    return $data;
  }
}

?>