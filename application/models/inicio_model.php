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

//put your code here
}

?>
