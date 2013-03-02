<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class evento_model extends CI_Controller{
	
	public function obtener_eventos(){
		$this->db->select("id_evento,nombre,lugar, anio, descripcion");
		$this->db->order_by("id_evento", "asc");
		$query = $this->db->get('evento');
		return $query->result_array();
	}
}

?>
