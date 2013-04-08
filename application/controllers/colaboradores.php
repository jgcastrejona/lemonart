<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

	public function index() {
		$limit = 4;
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
		$this->load->model("colaborador_model");
		$this->load->library('pagination');
		$numart = $this->colaborador_model->contar_colaboradores();
		$config['total_rows'] = $numart;

		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'colaboradores/pagina';
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
		$data["colaboradores"] = $this->colaborador_model->obtener_colaboradores($config['per_page'], $page);
		//$this->load->view('pagin_view', $data);
		$this->load->view('colaboradores_view', $data);
	}

	public function pagina($offset = 0) {
		$limit = 4;
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
		$this->load->library('pagination');
		$this->load->model("colaborador_model");

		$numart = $this->colaborador_model->contar_colaboradores();
		$config['total_rows'] = $numart;
		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'colaboradores/pagina';

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
		$data["colaboradores"] = $this->colaborador_model->obtener_colaboradores($config['per_page'], $page);
		$this->load->view('colaboradores_view', $data);
	}

}