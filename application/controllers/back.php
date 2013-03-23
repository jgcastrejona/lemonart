<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Back extends CI_Controller {

	public function index() {
		if ($this->isValidated()) {
			redirect("back/dashboard");
		} else {
			$this->load->view("login_view");
		}
	}

	public function login() {
		$this->load->model("login_model");

		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('pass', 'contraseña', 'required');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			$consulta = $this->login_model->validarlogin(
					($this->security->xss_clean($this->input->post('usuario'))), sha1($this->security->xss_clean($this->input->post('pass')))
			);

			if ($consulta) {
				$sesion_data = array(
					'id' => $consulta[0]['id_usuario'],
					"nombre" => $consulta[0]["nombre"]
				);

				$this->session->set_userdata($sesion_data);
				redirect("back/dashboard");
			} else {

				redirect("back/index");
			}
		}
	}

	public function dashboard() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('artista')
					->set_subject('Artista')
					->columns('nombre', "imagen", 'biografia')
					->display_as('nombre', 'Nombre')
					->display_as("imagen", "Imagen")
					->display_as('biografia', 'Biografía');

			$crud->fields('nombre', "imagen", 'biografia');
			$crud->required_fields('nombre', 'biografia');
			$crud->set_field_upload('imagen', 'images');


			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("dashboard_view", $output);
		}

		else
			redirect("back/index");
	}

	public function artistas() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('artista')
					->set_subject('Artista')
					->columns('nombre', "imagen", 'biografia')
					->display_as('nombre', 'Nombre')
					->display_as("imagen", "Imagen")
					->display_as('biografia', 'Biografía');


			$crud->fields('nombre', "imagen", 'biografia');
			$crud->required_fields('nombre', 'biografia');
			$crud->set_field_upload('imagen', 'images/artistas');


			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	public function obras() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('obra')
					->set_subject('Obra')
					->columns('titulo', "descripcion", 'imagen', "id_artista", "miniatura", "en_venta", "precio")
					->display_as('nombre', 'Nombre')
					->display_as('descripcion', 'Descripción de la obra')
					->display_as("imagen", "Imagen")
					->display_as("id_artista", "Artista")
					->display_as('miniatura', 'Imagen en miniatura')
					->display_as("en_venta", "En venta")
					->display_as("precio", "Precio");

			$crud->set_relation("id_artista", "artista", "nombre");

			//$crud->fields('titulo', "descripcion", 'imagen',"id_Artista","miniatura","en_venta","precio");
			$crud->required_fields('titulo', "descripcion", 'imagen', "id_artista", "miniatura", "en_venta", "precio");
			$crud->set_field_upload('imagen', 'images/obras/miniatura');
			$crud->set_field_upload('miniatura', 'images/obras');


			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	public function colaboradores() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('colaborador')
					->set_subject('Colaborador')
					->columns('nombre', "logo", 'descripcion')
					->display_as('nombre', 'Nombre')
					->display_as("logo", "Logo")
					->display_as('descripcion', 'Descripcion');


			//$crud->fields('nombre', "imagen", 'biografia');
			$crud->required_fields('nombre', 'logo', "descripcion");
			$crud->set_field_upload('logo', 'images/colaboradores');


			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	public function eventos() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('evento')
					->set_subject('Eventos')
					->columns('nombre', "lugar", 'anio', "descripcion")
					->display_as('nombre', 'Nombre')
					->display_as("lugar", "Lugar")
					->display_as('anio', 'Año')
					->display_as('descripcion', 'Descripción');

			$crud->set_relation("anio", "anio", "anio");

			$crud->required_fields('nombre', "lugar", 'anio', "descripcion");
			//$crud->set_field_upload('logo', 'images/colaboradores');


			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	public function blog() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('blog')
					->set_subject('Eventos');
			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}

	public function nosotros() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('nosotros')
					->set_subject('Nosotros')
					->columns('nombre','descripcion');
			
			$crud->edit_fields('descripcion');
			
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}
	
	public function integrantes(){
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('integrantes')
					->set_subject('Integrantes');

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}

	public function isValidated() {
		return isset($this->session->userdata['id']);
	}

}

?>
