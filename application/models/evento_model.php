<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class evento_model extends CI_Controller {

	public function obtener_eventos($id_anio) {
		$this->db->select("id_evento,nombre,lugar, anio, descripcion");
		$this->db->order_by("id_evento", "asc");
		$query = $this->db->get_where('evento', array("anio" => $id_anio));
		return $query->result_array();
	}

	public function obtener_anios() {
		//$this->db->select("id_anio","anio");
		$this->db->order_by("anio", "desc");
		$query = $this->db->get('anio');
		return $query->result_array();
	}

	public function obtener_evento($id) {
		$query = $this->db->get_where('evento', array("id_evento" => $id));
		return $query->result_array();
	}
	
	public function obtenerultimoevento(){
		$this->db->order_by("anio", "desc");
		$query = $this->db->get('evento',1);
		
		return $query->result_array();
	}

}

?>
