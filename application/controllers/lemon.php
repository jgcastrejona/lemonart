<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Lemon extends CI_Controller {

	public function index() {
		$this->load->model("inicio_model");
		$data["slides"] =  $this->inicio_model->get_slides();
		$this->load->view('home',$data);
	}

}