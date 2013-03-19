<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author Daniel
 */
class login_model extends CI_Model {

	public function validarlogin($usuario, $password) {
		$data = array(
			'nombre' => $usuario,
			'password' => $password
		);

		$query = $this->db->get_where('usuario', $data);
		return $query->result_array();
	}

	public function salir() {
		return $this->session->sess_destroy();
	}

}

?>
