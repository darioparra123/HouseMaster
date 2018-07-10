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

class guardarCuentas extends CI_Model {

    function __construct() {
        parent::__construct();
    }
/*
 * 
 * @param camposad este funcion toma los parametros para poder almacenarlos en la BD y asi crear la cuenta de usuario
 */
   
     public function guardarCuentaUsuario($paramus) {
        $camposus = array(
            'nombre' => $paramus['nombre'],
            'numero' => $paramus['numero'],
            'direccion' => $paramus['direccion'],
           
            'contrasena' => $paramus['contrasena']
        );
        $this->db->insert('usuarios',$camposus);
    }
   
        
      
    }
    
  




