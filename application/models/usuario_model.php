<?php

/**
 * esta clase sirve para poder validar los datos ingresados del usuario con la BD y asi poder iniciar sesion correctamente
 * @author Dario parra
 * @version 1.0
 */
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
      $this->db->select('nombre','contrasena');
      $this->db->from('usuarios');
      $this->db->where('nombre', $nombre);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}