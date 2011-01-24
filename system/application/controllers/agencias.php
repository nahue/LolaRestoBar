<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agencias extends Mi_Controlador {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        
    }

    function index($cambiado = 0) {
        $this->form_validation->set_rules('codigo', 'codigo', 'required|trim|max_length[20]');
        $this->form_validation->set_error_delimiters('<span class="validate_error">', '</span>');
        $agencia = new Agencia();
        $agencia = $agencia->getAgencia();


        if ($this->form_validation->run() == FALSE) { // validation hasn'\t been passed
            $this->datos = array();
            $this->datos["cambiado"] = $this->session->flashdata('codigoCambiado');
            if ($agencia)
            {
                $this->datos["codigo"] = $agencia["codigo"];
            }
            /*
            $this->template->title("Agencias de Turismo");
            $this->template->build("agencias",$this->datos);
            */
            
            $this->load->view('agencias', $this->datos);
        } else {
            //$agencia = new Agencia();
            if (!$agencia)
                $agencia = new Agencia();
            $agencia->codigo = set_value('codigo');
            $agencia->save();
            $this->session->set_flashdata('codigoCambiado', true);
            redirect('agencias');
        }
    }
/*
    function codigoCambiado()
    {
        $agencia = new Agencia();
        $agencia = $agencia->getAgencia();
        $this->datos["codigo"] = $agencia["codigo"];
        $this->template->title("Codigo cambiado correctamente");
        $this->template->build("agencias/codigoCambiado");
    }
 * 
 */
}