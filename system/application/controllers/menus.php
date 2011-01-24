<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Menus extends Mi_Controlador
{

    function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('fechas');
        $this->load->helper('form');
        $this->load->helper('url');

    }

    function index()
    {
        $producto = new Producto();
        $productos = $producto->getAll();

        $datos = array('productos' => $productos);
        
        $this->template->build('menus',$datos);

    }

    function agregar()
    {
        $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[25]');
        $this->form_validation->set_rules('vigencia', 'vigencia', 'required');
        $this->form_validation->set_rules('precio', 'precio', 'required|is_numeric');

        $this->form_validation->set_error_delimiters('<span class="validate_error">', '</span>');
        $this->template->set_partial("formulario", "menus/formulario");
    
        $this->datos["producto"] = array(
            'nombre' => '',
            'vigencia' => '',
            'precio' => ''
        );
        if ($this->form_validation->run() == false) { // validation hasn'\t been passed
        
            $this->template->title('Agregar producto');
            $this->template->build('menus/agregar',$this->datos);
            //$this->load->view("menus/agregar",$this->datos);

        } else {
            $form_data = array(
                'nombre' => set_value('nombre'), 
                'vigencia' => $this->fechas->cambiaf_a_mysql(set_value('vigencia')), 
                'precio' => set_value('precio')
            );
            
   
            
            try {

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'doc|docx|word|rtf|text|txt';
                $config['max_size'] = '100';


                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    $this->datos["error"] = $this->upload->display_errors();
                    $this->template->build('menus/agregar', $this->datos);
                    //$this->load->view("menus/agregar",$this->datos);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $producto = new Producto();
                    $producto->fromArray($form_data);
                    $producto->save();

                    $this->session->set_flashdata('mensaje', "Usuario creado correctamente");
                    
                    redirect("menus","refresh");
                }

            }
            catch (Doctrine_Exception $ex) {

                echo 'An error occurred saving your information. Please try again later';

            }
            
        }
    }

    function eliminar()
    {
        if (!$this->uri->segment(3))
            redirect("/");

        $id = $this->uri->segment(3);

        $producto = new Producto();
        $p = $producto->getProducto($id);

        if ($_POST) {
            $p->delete();
            redirect("menus/index");
        }
        $this->template->title('Eliminar producto');
        $this->template->build('menus/eliminar', array("producto" => $p));
        //$this->load->view('menus/eliminar', array("producto" => $p));
    }

    function editar()
    {
        if (!$this->uri->segment(3))
            redirect("/");
        $this->form_validation->set_rules('nombre', 'nombre',
            'trim|required|max_length[25]');
        $this->form_validation->set_rules('vigencia', 'vigencia', 'trim|required');
        $this->form_validation->set_rules('precio', 'precio', 'required|is_numeric');

        $this->form_validation->set_error_delimiters('<span class="validate_error">', '</span>');
        
        
        $id = $this->uri->segment(3);
        $producto = new Producto();
        $p = $producto->getProducto($id);

        $this->template->set_partial("formulario", "menus/formulario");
        if ($this->form_validation->run() == false) { // validation hasn'\t been passed
            $this->template->title('Editar producto');
            $this->template->build('menus/editar', array("producto" => $p));
            //$this->load->view('menus/editar', array("producto" => $p));
        } else {
            try {
                $form_data = array('nombre' => set_value('nombre'), 'vigencia' => $this->fechas->cambiaf_a_mysql(set_value('vigencia')),
                    'precio' => set_value('precio'));

                $p->fromArray($form_data);
                $p->save();
                redirect('menus/index');
            }
            catch (Doctrine_Exception $ex) {
                echo "Ocurrio un error al modificar el producto";
            }

        }


    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
