<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tienda extends CI_Controller {

    public function index() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
        $this->load->view("tienda_view",$data);
    }

}