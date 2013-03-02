<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index() {
		$this->load->model("evento_model");
		$datos["eventos"] = $this->evento_model->obtener_eventos();
		$this->load->view('eventos_view' , $datos);
	}

}