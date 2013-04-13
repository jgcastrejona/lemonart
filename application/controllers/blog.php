<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
                $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
                $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();
		$limit = 10;

		$this->load->model("blog_model");
		$this->load->library('pagination');
		$numart = $this->blog_model->contar_blog();
		$config['total_rows'] = $numart;

		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'blog/pagina';
		//$config['display_pages'] = FALSE;
		//$config['first_link'] = FALSE;
		//$config['last_link'] = FALSE;
		$config['next_tag_open'] = '<p class="nextbutton">';
		$config['next_tag_close'] = '</p>';
		$config['prev_tag_open'] = '<p class="prevbutton">';
		$config['prev_tag_close'] = '</p>';
		$config['next_link'] = '';
		$config['prev_link'] = '';


		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["blog"] = $this->blog_model->obtener_blog($config['per_page'], $page);
		//$this->load->view('pagin_view', $data);
		$this->load->view('blog_view', $data);
	}

	public function pagina($offset = 0) {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
                $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
                $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();
		$limit = 10;
		$this->load->library('pagination');
		$this->load->model("blog_model");

		$numart = $this->blog_model->contar_blog();
		$config['total_rows'] = $numart;
		$config['per_page'] = $limit;
		$config['base_url'] = base_url() . 'blog/pagina';

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
		$data["blog"] = $this->blog_model->obtener_blog($config['per_page'], $page);
		$this->load->view('blog_view', $data);
	}

	public function entrada() {
		$this->load->model("inicio_model");
		$data["logo"]["logo"] = $this->inicio_model->getlogo();
                $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
                $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();
		$this->load->model("blog_model");
		$data["entrada"] = $this->blog_model->obtener_entrada($this->uri->segment(3));
		$this->load->view("entrada_view", $data);
	}

}