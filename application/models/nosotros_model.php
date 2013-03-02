<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nosotros
 *
 * @author Daniel
 */
class nosotros_model extends CI_Model {

	public function obtener_usuarios() {
		$this->db->select("id_integrante, nombre");
		$query = $this->db->get('integrantes');
		return $query->result_array();
	}
	
	public function obtener_integrante($id){
		$query = $this->db->get_where("integrantes", array("id_integrante" => $id));
		return $query->result_array();
	}
	
	public function que(){
		$query = $this->db->get_where("nosotros", array("titulo" => "que"));
		return $query->result_array();
	}

	public function mision(){
		$query = $this->db->get_where("nosotros", array("titulo" => "mision"));
		return $query->result_array();
	}
	
	public function vision(){
		$query = $this->db->get_where("nosotros", array("titulo" => "vision"));
		return $query->result_array();
	}
}

?>
