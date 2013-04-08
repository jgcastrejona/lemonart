<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inicio_model
 *
 * @author Daniel
 */
class inicio_model extends CI_Model {

	public function get_slides() {
		$query = $this->db->get('slide');
		return $query->result_array();
	}
	
	public function getlogo(){
		$query = $this->db->get('logo');
		return $query->result_array();
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////
	public function artistasd(){
		$query = $this->db->get_where('descripcion', array('clave' => "artistadestacado"));
		return $query->result_array();
	}
	
	public function eventosd(){
		$query = $this->db->get_where('descripcion', array('clave' => "eventodestacado"));
		return $query->result_array();
	}
	
	public function colaboradoresd(){
		$query = $this->db->get_where('descripcion', array('clave' => "colaboradordestacado"));
		return $query->result_array();
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////
	public function destacadosartistas(){
		$this->db->order_by("id_destacado", "desc");
		$query = $this->db->get('artistasdestacados', 4);
		return $query->result_array();
	}
	
	public function destacadoseventos(){
		$this->db->order_by("id_destacado", "desc");
		$query = $this->db->get('eventosdestacados', 4);
		return $query->result_array();
	}
	
	public function destacadoscolaboradores(){
		$this->db->order_by("id_destacado", "desc");
		$query = $this->db->get('colaboradoresdestacados', 4);
		return $query->result_array();
	}
	
	

//put your code here
}

?>
