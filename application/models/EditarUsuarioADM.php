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
class EditarUsuarioADM extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function  editar($id){
        $this->db->where('id', $id);
        $query = $this->db->get('usuarios');
        if ($query ->num_rows()>0) {
            return $query;
            
        }else{
            return false;
        }
        
        
        
      
    }
    function editarCuenta($id,$data){
       
         $this->db->update('usuarios',$data);     
         $this->db->where('id', $id);
       
        
        
    }

 

}
