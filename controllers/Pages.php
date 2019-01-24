<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {

// verificar si existe la vista
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            
    
        //    codeIG funcion para mostrar errores
            show_404();
        }

//un arrar con las varibles que se le pasa a la vista
                        //para la primer lettra Mayuscula
        $data['title'] = ucfirst($page);
//se carga de /view->carpet
        $this->load->view('templates/header');
//carga de la carpeta pages . cualqueira qwue empieze por page y 
//que este en el array $data
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        
    
    }



}