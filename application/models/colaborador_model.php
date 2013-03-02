<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of colaboradores_model
 *
 * @author Daniel
 */
class colaborador_model extends CI_Model {

	//put your code here

	public function contar_colaboradores() {
		return $this->db->count_all('colaborador');
	}

	function obtener_colaboradores($limit, $start) {
		$this->db->select("id_colaborador,nombre,logo,descripcion");
		$this->db->order_by("id_colaborador", "desc");
		$query = $this->db->get('colaborador', $limit, $start);
		return $query->result_array();
	}

}
?>
