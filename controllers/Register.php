<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('id') != '') {
				redirect(base_url() . 'profile');
		} else {
			$this->load->view('register');
		}
	}

	public function action()
	{
		
		$nama = $this->input->post('namereg');
	    $email = $this->input->post('emailreg');
	    $pass = $this->input->post('passreg');

	    if (empty($nama) OR empty($email) OR empty($pass)) {
	    	redirect(base_url() . 'register');
	    }
	    else {
	    	$this->load->model('register_model');
	    	$this->register_model->regUser($nama, $email, $pass);
	    }	    

		$this->load->model('id_user_model');
		$id = $this->id_user_model->getid($email);

		foreach ($id as $data) {
			$id_user = $data['id_u'];
		}

		$session_data = array(
						'id' => $id_user
					);
		$this->session->set_userdata($session_data);
		redirect(base_url() . 'login');
	}
}

?>
