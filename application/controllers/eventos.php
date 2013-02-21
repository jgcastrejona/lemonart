<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index() {
		$this->load->view('eventos_view');
	}

}