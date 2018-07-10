<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * esta clase es un controlador para todas las validaciones del sistema 
 * @author Dario parra
 * @version 1.0
 */
class miControlador extends CI_Controller {

    /**
     * Este constructor importa la carpeta models
     * @return archivo php guardarCuentas
     */
    function __construct() {
        parent::__construct();
        $this->load->model('guardarCuentas');
        $this->load->model('editarSensor');
    }

    /**
     *  @return archivo php de inicio de sesion
     * 
     */
    public function index() {
        $this->load->view('usuario/iniciar_sesion2');
    }

    /**
     * @param paramus toma los datos para guardarlas e insertar en la BD.
     * @return echo retorna un mensaje
     */
    public function crearUsuario() {

        $paramus ['nombre'] = $this->input->post('nombre');
        $paramus ['numero'] = $this->input->post('numero');
        $paramus ['direccion'] = $this->input->post('direccion');
        $paramus ['contrasena'] = $this->input->post('contrasena');
        $this->guardarCuentas->guardarCuentaUsuario($paramus);

        echo'cuenta creada de usuario';
        $this->load->view("administrador/CrearUsuADM");
    }

    /**
     * @param toma los parametros del usuario para validar la cuenta de usuario
     */
    public function iniciar_sesion_post() {
        if ($this->input->post()) {
            $nombre = $this->input->post('nombre');
            $contrasena = $this->input->post('contrasena');
            $this->load->model('usuario_model');
            $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
            if ($usuario) {
                $usuario_data = array(
                    'nombre' => $usuario->nombre,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                $this->load->view('usuario/menuUsuario');
            } else {

                function adddta() {
                    $nombre = $this->input->post('nombre');
                    $contrasena = $this->input->post('contrasena');

                    $this->session->set_flashdata('msg', 'Usuario Incorrecto');
                    $this->load->view('usuario/iniciar_sesion2');
                }

            }
        }
    }

    /** @param toma los parametros del usuario para validar la cuenta de administrador con la BD.
     * 
     */
    public function loginadmin() {
        if ($this->input->post()) {
            $nombre = $this->input->post('nombre');
            $contrasena = $this->input->post('contrasena');
            $this->load->model('usuario_model_administrador');
            $usuario = $this->usuario_model_administrador->usuario_por_nombre_contrasena_administrador($nombre, $contrasena);
            if ($usuario) {
                $usuario_data = array(
                    'nombre' => $usuario->nombre,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                $this->load->view('administrador/MenuADM');
            } else {
                $this->load->view('usuario/vusuario');
            }
        }
    }

    /**
     * @return this retorna archivos php
     */
    public function reload() {
        $this->load->view('usuario/iniciar_sesion_adm');
    }

    /**
     * @return this retorna archivos php
     */
    public function controldeluz() {

        $this->load->view('usuario/controldeluz');
    }

    /**
     * @return this retorna archivos php
     */
    public function controldecortina() {

        $this->load->view('usuario/controldecortina');
    }

    /**
     * @return this retorna archivos php
     */
    public function controldecamara() {

        $this->load->view('usuario/controldecamara');
    }

    /**
     * @return this retorna archivos php
     */
    public function galeriadeimagenes() {
        $this->load->view('usuario/galeriadeimagenes');
    }

    /**
     * @return this retorna archivos php
     */
    public function cerrarsesion() {

        $this->load->view('usuario/iniciar_sesion2');
    }

    /**
     * @return this retorna archivos php
     */
    public function CrearUsuarioAD() {

        $this->load->view('administrador/CrearUsuADM');
    }

    public function VerUsuADM() {
        $this->load->model('verUsuarios');
        $data = array(
            'enlaces' => $this->verUsuarios->verTodo(),
            'dump' => 0
        );


        $this->load->view('administrador/VerUsuADM', $data);
    }

    public function configurarluz() {

        $this->load->view('usuario/configurarluz');
    }

    public function cancelarluz() {

        $this->load->view('usuario/controldeluz');
    }

    public function prenderluzarduino() {


        $this->editarSensor->editarSensorPrender();
    }

    public function apagarluzarduino() {


        $this->editarSensor->editarSensorApagar();
    }

    public function eliminarUsuADM() {

        $id = $this->uri->segment(3);
        $this->load->model('EliminarUsuarioADM');
        $this->EliminarUsuarioADM->eliminar($id);
    }

    public function editarUsuADM() {

        $id = $this->uri->segment(3);
        $this->load->model('EditarUsuarioADM');
        $obtenerDatos = $this->EditarUsuarioADM->editar($id);

        if ($obtenerDatos != false) {
            foreach ($obtenerDatos->result() as $row) {
                $nombre = $row->nombre;
                $numero = $row->numero;
                $direccion = $row->direccion;
                $contrasena = $row->contrasena;
            }
            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'numero' => $numero,
                'direccion' => $direccion,
                'contrasena' => $contrasena
            );
        } else {
            $data = '';
            return false;
        }
        $this->load->view('administrador/EditarUsuADM', $data);
    }

    public function editarUsuario() {
        $id = $this->uri->segment(3);
        $data = array(
       
            'nombre' => $this->input->post('nombre', true),
            'contrasena' => $this->input->post('contrasena', true),
            'direccion' => $this->input->post('direccion', true),           
            'numero' => $this->input->post('numero', true),
        );
        $this->load->model('EditarUsuarioADM');
        $this->EditarUsuarioADM->editarCuenta($id, $data);
       
    }

}
