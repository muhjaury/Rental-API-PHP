<?php

class register_model extends CI_Model{

  public function regUser($nama, $email, $pass){

    $this->load->database();
    
    $sql = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$pass')";	
    $this->db->query($sql);

    return;
  }
}


?>