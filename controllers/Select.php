<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Controller {

	public function index()
	{
		header("Content-type:application/json");

		$headers = apache_request_headers();
		$key = $headers['key'];


		$smethod = $_SERVER['REQUEST_METHOD'];
        $result = array();		

		$this->load->model('key_model');
        $cek = $this->key_model->cek($key);
        if ($smethod=='GET') {
        	if (empty($key)) {
				$result['status']['code'] = 400;
			    $result['status']['description'] = 'Error Headers';
			}
			else{
				if ($cek == 0) {
					$result['status']['code'] = 400;
			    	$result['status']['description'] = 'Invalid Token';
				}
				else
				{
		            $result['status']['code'] = $cek;
		            $result['status']['description'] = 'Request OK';

		            $this->load->model('Select_model');
					$result['results'] = $this->Select_model->select();
				}
				
			}
        }
        else{
            $result['status']['code'] = 400;
            $result['status']['description'] = 'Error Request';
        }

        echo json_encode($result);
	}
}
