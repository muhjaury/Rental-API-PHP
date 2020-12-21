<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateCar extends CI_Controller {

	public function index()
	{
		header("Content-type:application/json");

		$headers = apache_request_headers();
		$key = $headers['key'];


		$smethod = $_SERVER['REQUEST_METHOD'];
        $result = array();		

		$this->load->model('key_model');
        $cek = $this->key_model->cek($key);


        if ($smethod=='POST') {
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
		            $result['status']['code'] = 200;
		            $result['status']['description'] = 'Request OK';

		            $this->load->model('id_model');
					$id = $this->id_model->getid($key);

					foreach ($id as $data) {
						$id = $data['id_u'];
					}
					$this->load->model('updatemobil_model');
					$result['results'] = $this->updatemobil_model->updatemobil($id);
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
