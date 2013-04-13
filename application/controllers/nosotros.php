<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function index() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("nosotros_model");
        $data["usuarios"] = $this->nosotros_model->obtener_usuarios();
        $data["panel"] = $this->nosotros_model->que();
        $this->load->view('nosotros_view', $data);
    }

    public function integrante() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("nosotros_model");
        $data["usuarios"] = $this->nosotros_model->obtener_usuarios();

        $page = $this->uri->segment(3);
        $data["panel"] = $this->nosotros_model->obtener_integrante($page);
        $this->load->view("nosotros_view", $data);
    }

    public function que() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("nosotros_model");
        $data["usuarios"] = $this->nosotros_model->obtener_usuarios();
        $data["panel"] = $this->nosotros_model->que();
        $this->load->view('nosotros_view', $data);
    }

    public function mision() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("nosotros_model");
        $data["usuarios"] = $this->nosotros_model->obtener_usuarios();
        $data["panel"] = $this->nosotros_model->mision();
        $this->load->view('nosotros_view', $data);
    }

    public function vision() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("nosotros_model");
        $data["usuarios"] = $this->nosotros_model->obtener_usuarios();
        $data["panel"] = $this->nosotros_model->vision();
        $this->load->view('nosotros_view', $data);
    }

}