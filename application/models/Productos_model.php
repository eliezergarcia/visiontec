<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos() {
		$resultados = $this->db->get("productos");
		return $resultados->result();
	}

	public function storeProductos($data) {
		return $this->db->insert("productos", $data);
	}

	public function getProducto($id) {
		$this->db->where("id_prod", $id);
		$resultado = $this->db->get("productos");
		return $resultado->row();
	}

	public function updateProducto($id, $data) {
		$this->db->where("id_prod", $id);
		return $this->db->update("productos", $data);
	}

	public function deleteProducto($id) {
		$this->db->where('id_prod', $id);
		return $this->db->delete('productos');
	}
}