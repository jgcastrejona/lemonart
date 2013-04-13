<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tienda extends CI_Controller {

    public function index() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();
        $this->load->view("tienda_view", $data);
    }

}