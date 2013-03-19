<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog_model
 *
 * @author Daniel
 */
class Blog_model extends CI_Model {

	function contar_blog() {
		return $this->db->count_all('blog');
	}

	function obtener_blog($limit, $start) {
		$this->db->select("id_entrada,titulo,resumen");
		$this->db->order_by("id_entrada", "desc");
		$query = $this->db->get('blog', $limit, $start);
		return $query->result_array();
	}
	
	function obtener_entrada($id){
		$query = $this->db->get_where("blog", array("id_entrada" => $id));
		return $query->result_array();
	}

}

?>
