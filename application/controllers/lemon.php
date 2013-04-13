<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lemon extends CI_Controller {

    public function index() {
        $this->load->model("inicio_model");
        $this->load->model("artista_model");
        $this->load->model("evento_model");
        $this->load->model("colaborador_model");

        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $data["artistasd"] = $this->inicio_model->artistasd();
        $data["eventosd"] = $this->inicio_model->eventosd();
        $data["colaboradoresd"] = $this->inicio_model->colaboradoresd();

        $data["artistasdestacados"] = $this->inicio_model->destacadosartistas();

        $cont = 0;
        foreach ($data["artistasdestacados"] as $artista) {
            $data["artistasdestacados"]["datos"][$cont] = $this->artista_model->obtener_artista($artista["id_artista"]);
            $cont++;
        }

        //var_dump($data["artistasdestacados"]["datos"][0]);
        $cont = 0;
        $data["eventosdestacados"] = $this->inicio_model->destacadoseventos();
        foreach ($data["eventosdestacados"] as $evento) {
            $data["eventosdestacados"]["datos"][$cont] = $this->evento_model->obtener_evento($evento["id_evento"]);
            $cont++;
        }


        $cont = 0;
        $data["colaboradoresdestacados"] = $this->inicio_model->destacadoscolaboradores();
        foreach ($data["colaboradoresdestacados"] as $colaborador) {
            $data["colaboradoresdestacados"]["datos"][$cont] = $this->colaborador_model->obtener_colaborador($colaborador["id_colaborador"]);
            $cont++;
        }

        $data["slides"] = $this->inicio_model->get_slides();
        $this->load->view('home', $data);
    }

}