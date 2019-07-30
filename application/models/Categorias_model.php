<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function getCategorias() {
		$resultados = $this->db->get("categorias");
		return $resultados->result();
	}

	public function storeCategorias($data) {
		return $this->db->insert("categorias", $data);
	}

	public function getCategoria($id) {
		$this->db->where("id_categoria", $id);
		$resultado = $this->db->get("categorias");
		return $resultado->row();
	}

	public function updateCategoria($id, $data) {
		$this->db->where("id_categoria", $id);
		return $this->db->update("categorias", $data);
	}

	public function deleteCategoria($id) {
		$this->db->where('id_categoria', $id);
		return $this->db->delete('categorias');
	}
}