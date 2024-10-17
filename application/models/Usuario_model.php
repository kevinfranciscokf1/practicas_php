<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtener_usuarios() {
        return $this->db->get('usuarios')->result();
    }

    public function obtener_usuario($id) {
        return $this->db->get_where('usuarios', array('id' => $id))->row();
    }

    public function crear_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }

    public function actualizar_usuario($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
    }

    public function eliminar_usuario($id) {
        return $this->db->delete('usuarios', array('id' => $id));
    }
}
