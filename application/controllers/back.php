<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Back extends CI_Controller {

	public function index() {
		$this->load->view("login_view");
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

	public function isValidated() {
		return isset($this->session->userdata['id']);
	}

}

?>
