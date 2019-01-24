<?php

class post extends CI_Controller {

    public function index() {

//un arrar con las varibles que se le pasa a la vista
                        //para la primer lettra Mayuscula
        $title = 'latest Posts !';
        $data['title'] = ucfirst($title);

        $data['posts'] = $this->post_model->get_posts();
        // print_r($data['posts']);



//se carga de /view->carpet
        $this->load->view('templates/header');
//carga de la carpeta pages . cualqueira qwue empieze por page y 
//que este en el array $data
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
        
    
    }



}