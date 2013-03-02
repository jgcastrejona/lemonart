<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of artista_model
 *
 * @author Daniel
 */
class artista_model extends CI_Model {

	//put your code here

	public function contar_artistas() {
		return $this->db->count_all('artista');
	}

	function obtener_artistas($limit, $start) {
		$this->db->select("id_artista,nombre,imagen");
		$this->db->order_by("id_artista", "desc");
		$query = $this->db->get('artista', $limit, $start);
		return $query->result_array();
	}

}

?>
