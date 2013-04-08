<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Lemon extends CI_Controller {

	public function index() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
		
		$data["artistasd"] = $this->inicio_model->artistasd();
		$data["eventosd"] = $this->inicio_model->eventosd();
		$data["colaboradoresd"] = $this->inicio_model->colaboradoresd();
		
		$data["artistasdestacados"] = $this->inicio_model->destacadosartistas();
		$data["eventosdestacados"] = $this->inicio_model->destacadoseventos();
		$data["colaboradoresdestacados"] = $this->inicio_model->destacadoscolaboradores();
		
		$data["slides"] =  $this->inicio_model->get_slides();
		$this->load->view('home',$data);
	}
	
	

}