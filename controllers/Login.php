<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		if ($this->session->userdata('id') != '') {
			redirect(base_url() . 'profile');
		} else {
			$this->load->view('login');
		}	
	}

	function login_validation()
	{
		$this->load->helper('url');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
				//true
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				//model function
				$this->load->model('login_model');
				if ($this->login_model->can_login($email, $password)) 
				{
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
				else
				{
					$this->session->set_flashdata('error', 'Invalid Username or Password');
					redirect(base_url() . 'login');
				}
			}
		else
		{
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect(base_url() . 'login');
		}
		
	}
}

?>
