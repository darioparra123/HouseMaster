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
class editarSensor extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     * @param camposad este funcion toma los parametros para poder almacenarlos en la BD y asi crear la cuenta de usuario
     */

    public function editarSensorPrender() {
        
        $this->db->select('led1');
        $data = array(
            'estado' => '2',
            
          
            
        );   
        $this->db->where('numerosensor','100');
        $this->db->update('led1', $data);
       
       
       
            
      
    
    }
    
   public function editarSensorApagar() {
       $this->db->select('led1');
        $data = array(
            'estado' => '1',
            
          
            
        );   
        $this->db->where('numerosensor','100');
        $this->db->update('led1', $data);
       
  
   }

}
