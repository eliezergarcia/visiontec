<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
	}

	public function index()
	{
		$data = array(
			'productos' => $this->Productos_model->getProductos(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/list', $data);
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$data = array(
			'categorias' => $this->Categorias_model->getCategorias(),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/agregar', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$id_categoria = $this->input->post("id_categoria");
		
		$data = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'f_id_categoria' => $id_categoria
		);

		if ($this->Productos_model->storeProductos($data)) {
			$this->session->set_flashdata("success", "El producto se agregó correctamente.");
			redirect(base_url()."productos"); 
		}else{
			$this->session->set_flashdata("error", "Ocurrió un problema al guardar la información.");
			redirect(base_url()."productos/agregar"); 
		}
	}

	public function edit($id)
	{
		$data = array(
			'producto' => $this->Productos_model->getProducto($id),
			'categorias' => $this->Categorias_model->getCategorias(),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$idProducto = $this->input->post("idProducto");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$id_categoria = $this->input->post("id_categoria");
		
		$data = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'f_id_categoria' => $id_categoria,
		);

		if ($this->Productos_model->updateProducto($idProducto, $data)) {
			$this->session->set_flashdata("success", "El producto se editó correctamente.");
			redirect(base_url()."productos"); 
		}else{
			$this->session->set_flashdata("error", "Ocurrió un problema al editar la información.");
			redirect(base_url()."productos/edit"); 
		}
	}

	public function view($id)
	{
		$producto = $this->Productos_model->getProducto($id);
		$data = array(
			'producto' => $this->Productos_model->getProducto($id),
			'categoria' => $this->Categorias_model->getCategoria($producto->f_id_categoria),
		);	
		
		$this->load->view('admin/productos/view', $data);	
	}

	public function delete($id)
	{
		$this->Productos_model->deleteProducto($id);
		echo "productos";
	}
}
