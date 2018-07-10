<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * esta clase es un controlador para poder guardar los parametros de creacion de cuentas
 * @author Dario parra
 * @version 1.0
 */
class EliminarUsuarioADM extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function  eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
        
      
    }

 

}
