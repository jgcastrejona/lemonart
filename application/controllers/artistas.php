<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Artistas extends CI_Controller {

	public function index() {
		$this->load->view('artistas_view');
	}
	
	public function ejemplo(){
		$this->load->view("ejemplo");
	}

}