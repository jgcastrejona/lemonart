<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Artistas extends CI_Controller {

	public function index() {
		$this->load->view('artistas_view');
	}
	
	public function perfil(){
		//saca artista de la base
		$this->load->view("artista_view");
	}
	
	public function obra(){
		$this->load->model("obra");
		//sacar la obra de la base de datos
		$this->load->view("obra_demo_view");
	}

}