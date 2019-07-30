<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Categorias_model");
	}

	public function index()
	{
		$data = array(
			'categorias' => $this->Categorias_model->getCategorias(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $data);
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/agregar');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		
		$data = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
		);

		if ($this->Categorias_model->storeCategorias($data)) {
			$this->session->set_flashdata("success", "La categoría se agregó correctamente.");
			redirect(base_url()."categorias"); 
		}else{
			$this->session->set_flashdata("error", "Ocurrió un problema al guardar la información.");
			redirect(base_url()."categorias/agregar"); 
		}
	}

	public function edit($id)
	{
		$data = array(
			'categoria' => $this->Categorias_model->getCategoria($id),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$idCategoria = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		
		$data = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
		);

		if ($this->Categorias_model->updateCategoria($idCategoria, $data)) {
			$this->session->set_flashdata("success", "La categoría se editó correctamente.");
			redirect(base_url()."categorias"); 
		}else{
			$this->session->set_flashdata("error", "Ocurrió un problema al editar la información.");
			redirect(base_url()."categorias/edit"); 
		}
	}

	public function view($id)
	{
		$data = array(
			'categoria' => $this->Categorias_model->getCategoria($id),
		);	
		
		$this->load->view('admin/categorias/view', $data);	
	}

	public function delete($id)
	{
		$this->Categorias_model->deleteCategoria($id);
		echo "categorias";
	}

}
