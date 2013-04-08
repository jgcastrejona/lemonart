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

			$this->load->model("inicio_model");
			$data["logo"]["logo"] = $this->inicio_model->getlogo();
			$this->load->view("dashboard_view",$data);
		} else {
			redirect("back/index");
		}
	}

	public function logo() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('logo')
					->set_subject('Logo')
					->columns('logo');

			$crud->edit_fields('logo');



			$crud->unset_add();
			$crud->unset_delete();
			$crud->set_field_upload('logo', 'images/logo');
			//$crud->callback_after_upload(array($this, 'logo_callback'));

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		} else {
			redirect("back/index");
		}
	}

	/* function logo_callback($uploader_response, $field_info, $files_to_upload) {
	  $this->load->library('image_moo');

	  $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
	  $this->image_moo->load($file_uploaded)->save($file_uploaded, true);

	  return true;
	  } */

	public function descripcion() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('descripcion')
					->set_subject('Descripcion')
					->columns('texto', 'posicion');

			$crud->edit_fields('texto');

			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		} else {
			redirect("back/index");
		}
	}

	public function artistasdestacados() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('artistasdestacados')
					->set_subject('Artistas destacados')
					->columns('id_artista')
					->display_as('id_artista', 'Nombre artista');

			$crud->set_relation("id_artista", "artista", "nombre");
			$crud->required_fields('id_artista');
			/* $crud->unset_add();
			  $crud->unset_delete(); */

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}

	public function eventosdestacados() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('eventosdestacados')
					->set_subject('Eventos destacados')
					->columns('id_evento')
					->display_as('id_evento', 'Nombre evento');

			$crud->set_relation("id_evento", "evento", "nombre");
			$crud->required_fields('id_evento');
			/* $crud->unset_add();
			  $crud->unset_delete();
			 */
			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}

	public function colaboradoresdestacados() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$crud->set_table('colaboradoresdestacados')
					->set_subject('Colaboradores destacados')
					->columns('id_colaborador')
					->display_as('id_colaborador', 'Nombre colaborador');

			$crud->set_relation("id_colaborador", "colaborador", "nombre");
			$crud->required_fields('id_colaborador');
			/* $crud->unset_add();
			  $crud->unset_delete(); */

			$output = $crud->render();

			//$this->_example_output($output);

			$this->load->view("grid_view", $output);
		}
		else
			redirect("back/index");
	}

	public function slide() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$this->load->config('grocery_crud');
			$this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');

			$crud->set_table('slide');
			$crud->set_field_upload('imagen', 'images/slide');

			$crud->callback_after_upload(array($this, 'slide_callback'));
			$output = $crud->render();

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	function slide_callback($uploader_response, $field_info, $files_to_upload) {
		$this->load->library('image_moo');

		$file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
		$this->image_moo->load($file_uploaded)->resize_crop(910, 360)->save($file_uploaded, true);

		return true;
	}

	public function artistas() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$this->load->config('grocery_crud');
			$this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');

			$crud->set_table('artista')
					->set_subject('Artista')
					->columns('nombre', "imagen", 'biografia')
					->display_as('nombre', 'Nombre')
					->display_as("imagen", "Imagen")
					->display_as('biografia', 'Biografía');


			$crud->fields('nombre', "imagen", 'biografia');
			$crud->required_fields('nombre', 'biografia');
			$crud->set_field_upload('imagen', 'images/artistas');

			$crud->callback_after_upload(array($this, 'artistas_callback'));


			$output = $crud->render();

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	function artistas_callback($uploader_response, $field_info, $files_to_upload) {
		$this->load->library('image_moo');

		$file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
		$this->image_moo->load($file_uploaded)->resize_crop(205, 205)->save($file_uploaded, true);

		return true;
	}

	public function obras() {
		if ($this->isValidated()) {

			$crud = new grocery_CRUD();

			$this->load->config('grocery_crud');
			$this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');

			$crud->set_table('obra')
					->set_subject('Obra')
					->columns('titulo', "descripcion", 'imagen', "id_artista", "en_venta", "precio")
					->display_as('nombre', 'Nombre')
					->display_as('descripcion', 'Descripción de la obra')
					->display_as("imagen", "Imagen")
					->display_as("id_artista", "Artista")
					->display_as("en_venta", "En venta")
					->display_as("precio", "Precio");

			$crud->set_relation("id_artista", "artista", "nombre");
			//$crud->fields('titulo', "descripcion", 'imagen',"id_Artista","en_venta","precio");
			$crud->required_fields('titulo', "descripcion", 'imagen', "id_artista", "en_venta", "precio");
			$crud->set_field_upload('imagen', 'images/obras');
			$crud->callback_after_upload(array($this, 'obras_callback'));

			$output = $crud->render();

			$this->load->view("grid_view", $output);
		}

		else
			redirect("back/index");
	}

	function obras_callback($uploader_response, $field_info, $files_to_upload) {
		$this->load->library('image_moo');

		$file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
		$file_uploaded2 = $field_info->upload_path . '/miniatura/' . $uploader_response[0]->name;
		$this->image_moo->load($file_uploaded)->resize_crop(518, 518)->save($file_uploaded, true);
		$this->image_moo->load($file_uploaded)->resize_crop(146, 146)->save($file_uploaded2, true);

		return true;
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
					->set_subject('Evento')
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
					->set_subject('Entrada');
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
					->columns('nombre', 'descripcion');

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

	public function integrantes() {
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
