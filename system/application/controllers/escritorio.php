<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Escritorio extends Mi_Controlador
{

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $this->template->title('Escritorio');
        $this->template->build('escritorio');
    }
}