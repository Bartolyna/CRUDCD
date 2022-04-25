<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
	}

	public function index(){
		$datos['personas'] = $this->Persona->Seleccionar_todo();
		$this->load->view('welcome_message', $datos);
	}

	public function agregar(){
		$persona['nombre'] = $this->input->post('nombre');
		$persona['apellido'] = $this->input->post('apellido');
		$persona['fecha'] = $this->input->post('fecha');
		$persona['edad'] = $this->input->post('edad');
		$this->Persona->crear($persona);
		
		redirect('welcome');
	}
}
