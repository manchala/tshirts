<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {




	public function index()
	{
		//$this->load->view('layout/column1');
		$this->load->model('Products_model');
		$data['products'] = $this->Products_model->get_all();
		//echo "<pre>";
		//print_r($data['products']);
		$this->load->view('products', $data);
	}


}