<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('id') != '') {
			$this->load->view('dokumentasi');			
		}
		else {
			redirect(base_url() . 'login');
		}	
	}

	function new()
	{
		$this->load->model('profile_model');
		$data['randomkey'] = $this->profile_model->generate();
		$auth = $data['randomkey'];
		$this->load->model('authgenerate_model');
		$data['auth'] = $this->authgenerate_model->auth($auth);

		while ($data['auth'] == 1) {
			$data['randomkey'] = $this->profile_model->generate();
			$auth = $data['randomkey'];
			$this->load->model('authgenerate_model');
			$data['auth'] = $this->authgenerate_model->auth($auth);
		}

		$this->profile_model->insertnewtoken($auth);
		redirect(base_url() . 'profile/token');
	}

	function dokumentasi()
	{
		$this->load->view('dokumentasi');
	}

	function rental()
	{
		$this->load->model('profile_model');
		$data['rental'] = $this->profile_model->getrental();
		$this->load->view('rental', $data);
	}

	function rentalupdate()
	{
		$this->load->model('profile_model');
		$this->profile_model->updaterental();
		redirect(base_url() . 'profile/rental');
	}

	function token()
	{
		$this->load->model('profile_model');
		$data['key'] = $this->profile_model->getkey();
		$this->load->view('token', $data);
	}

	function logout()
	{
		$this->session->unset_userdata('id');
		redirect(base_url() . 'login');
	}
}

?>
