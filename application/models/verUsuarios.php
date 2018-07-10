<?php
/**
 * esta clase sirve para poder validar los datos ingresados del administrador con la BD y asi poder iniciar sesion correctamente
 * @author Dario parra
 * @version 1.0
 */
class verUsuarios extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function verTodo(){
      $query = $this->db->get('usuarios');
      if ($query->num_rows()>0) {
          return $query;
      } else {
          return false;    
      }
      
     
   }
   
   
}