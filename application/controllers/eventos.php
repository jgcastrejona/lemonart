<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Eventos extends CI_Controller {

    public function index() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("evento_model");
        $data["años"] = $this->evento_model->obtener_anios();
        $cont = 0;
        for ($i = 0; $i < count($data["años"]); $i++) {
            //$data["eventos"][$i] = $this->evento_model->obtener_eventos($data["años"][$i]["id_anio"]);
            $var = $this->evento_model->obtener_eventos($data["años"][$i]["id_anio"]);
            if (!empty($var)) {
                $data["eventos"][$cont] = $var;
                $data["añosus"][$cont] = $data["años"][$i]["anio"];
                $cont++;
            }
        }

        $data["evento"] = $this->evento_model->obtenerultimoevento();

        $this->load->view('eventos_view', $data);
    }

    public function evento($id) {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();

        $this->load->model("evento_model");
        $data["años"] = $this->evento_model->obtener_anios();
        $cont = 0;
        for ($i = 0; $i < count($data["años"]); $i++) {
            //$data["eventos"][$i] = $this->evento_model->obtener_eventos($data["años"][$i]["id_anio"]);
            $var = $this->evento_model->obtener_eventos($data["años"][$i]["id_anio"]);
            if (!empty($var)) {
                $data["eventos"][$cont] = $var;
                $data["añosus"][$cont] = $data["años"][$i]["anio"];
                $cont++;
            }
        }

        $data["evento"] = $this->evento_model->obtener_evento($id);

        $this->load->view('eventos_view', $data);
    }

}