<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function index() {
		$this->load->model("evento_model");
		$data["años"] = $this->evento_model->obtener_anios();
		for ($i = 0; $i < count($data["años"]); $i++) {
			$data["eventos"][$i] = $this->evento_model->obtener_eventos($data["años"][$i]["anio"]);
		}

		$data["evento"][0]["nombre"] = "Lemon Art";
		$data["evento"][0]["lugar"] = "";
		$data["evento"][0]["anio"] = "";
		$data["evento"][0]["descripcion"] = "Descripcion de lemon art o de los eventos";

		$this->load->view('eventos_view', $data);
	}

	public function evento($id) {
		$this->load->model("evento_model");
		
		$data["años"] = $this->evento_model->obtener_anios();
		for ($i = 0; $i < count($data["años"]); $i++) {
			$data["eventos"][$i] = $this->evento_model->obtener_eventos($data["años"][$i]["anio"]);
		}

		$data["evento"] = $this->evento_model->obtener_evento($id);

		$this->load->view('eventos_view', $data);
	}

}