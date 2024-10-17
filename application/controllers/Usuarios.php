<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    public function index() {
        $data['usuarios'] = $this->Usuario_model->obtener_usuarios();
        $this->load->view('usuarios/index', $data);
    }

    public function crear() {
        if ($this->input->post()) {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'email' => $this->input->post('email')
            );
            $this->Usuario_model->crear_usuario($data);
            redirect('usuarios');
        }
        $this->load->view('usuarios/crear');
    }

    public function editar($id) {
        $data['usuario'] = $this->Usuario_model->obtener_usuario($id);
        
        if ($this->input->post()) {
            $dataUpdate = array(
                'nombre' => $this->input->post('nombre'),
                'email' => $this->input->post('email')
            );
            $this->Usuario_model->actualizar_usuario($id, $dataUpdate);
            redirect('usuarios');
        }
        
        $this->load->view('usuarios/editar', $data);
    }

    public function eliminar($id) {
        $this->Usuario_model->eliminar_usuario($id);
        redirect('usuarios');
    }
}
