<?php

class Mi_Controlador extends Controller
{
    function __construct()
    {
        parent::Controller();
        $this->load->library('ion_auth');
        $this->load->helper('url');
        $this->template->set_theme('web2');
        $this->template->set_layout('main');
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('usuarios/login', 'refresh');
		}
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/libraries/MY_Controller.php */