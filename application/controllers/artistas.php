<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Artistas extends CI_Controller {

	public function index() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();

		$limit = 12;

		$this->load->model("artista_model");
		$this->load->library('pagination');
		$numart = $this->artista_model->contar_artistas();
		$config['total_rows'] = $numart;

		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'artistas/pagina';
		//$config['display_pages'] = FALSE;
		//$config['first_link'] = FALSE;
		//$config['last_link'] = FALSE;
		$config['next_tag_open'] = '<p class="nextbutton">';
		$config['next_tag_close'] = '</p>';
		$config['prev_tag_open'] = '<p class="prevbutton">';
		$config['prev_tag_close'] = '</p>';
		$config['next_link'] = '';
		$config['prev_link'] = '';
		//$config['div'] = '.posts';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["artistas"] = $this->artista_model->obtener_artistas($config['per_page'], $page);
		//$this->load->view('pagin_view', $data);
		$this->load->view('artistas_view', $data);
	}

	public function pagina($offset = 0) {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();

		$limit = 12;
		$this->load->library('pagination');
		$this->load->model("artista_model");

		$numart = $this->artista_model->contar_artistas();
		$config['total_rows'] = $numart;
		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'artistas/pagina';

		/* $config['display_pages'] = FALSE;
		  $config['first_link'] = FALSE;
		  $config['last_link'] = FALSE; */
		$config['next_tag_open'] = '<p class="nextbutton">';
		$config['next_tag_close'] = '</p>';
		$config['prev_tag_open'] = '<p class="prevbutton">';
		$config['prev_tag_close'] = '</p>';
		$config['next_link'] = '';
		$config['prev_link'] = '';


		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["artistas"] = $this->artista_model->obtener_artistas($config['per_page'], $page);
		$this->load->view('artistas_view', $data);
	}

	public function perfil() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
		//saca artista de la base
		$this->load->model("artista_model");
		$id = $this->uri->segment(3);
		$data["artista"] = $this->artista_model->obtener_artista($id);
		$data["obras"] = $this->artista_model->obtener_obras($id);

		$this->load->view("artista_view", $data);
	}

	public function obra() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
		
		$this->load->model("artista_model");
		$id = $this->uri->segment(3);
		$data["obra"] = $this->artista_model->obtener_obra($id);
		$data["artista"] = $this->artista_model->obtener_artista($data["obra"][0]["id_artista"]);
		$this->load->view("obra_view", $data);
	}

}