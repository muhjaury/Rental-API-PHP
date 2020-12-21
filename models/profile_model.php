<?php

class profile_model extends CI_Model{

  public function getkey(){

    $this->load->database();
    $id = $this->session->userdata('id');
    $sql = "SELECT or_key FROM user WHERE id_u = '$id';";
    $result = $this->db->query($sql);
    $data = $result->result_array();
    return $data;
  }

  public function getrental(){

    $this->load->database();
    $id = $this->session->userdata('id');
    $sql = "SELECT ntempat,alamat,no_telp FROM about WHERE foreign_id_u = '$id';";
    $result = $this->db->query($sql);
    $data = $result->result_array();
    return $data;
  }

  public function generate(){

    $chars = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = substr(str_shuffle($chars), 10, 32);

    return $randomString; 
	}

  public function insertkey(){

    $this->load->database();
    $sql = "SELECT or_key FROM user WHERE id_u = '$id';";
    $result = $this->db->query($sql);
    return;

  }

  public function insertnewtoken($auth){

    $this->load->database();
    $id = $this->session->userdata('id');
    $sql = "UPDATE user SET or_key = '$auth' WHERE id_u = '$id';";
    $this->db->query($sql);
    return;

  }

  public function updaterental(){

    $this->load->database();
    $id = $this->session->userdata('id');
    $ntempat = $this->input->post('nrental');
    $alamat = $this->input->post('alamat');
    $no_telp = $this->input->post('notelp');
    $sql = "UPDATE about SET ntempat = '$ntempat', alamat='$alamat', no_telp='$no_telp' WHERE foreign_id_u = '$id';";
    $this->db->query($sql);
    return;

  }
}

?>