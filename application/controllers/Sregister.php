<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sregister extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('Init_models');
    }



    public function index() {
        $sessid= $this->session->userdata('suserid');
        $banners = $this->Init_models->getadvertisebanners();
        $related_res = $this->Init_models->related_users($sessid);
        $view_params = array(
            'm_title' => 'Register',
            'title' => 'Register',
            'banners' => $banners,
            'related_res' => $related_res,
    
        );
        $this->load->view('sregister',$view_params);
    }

    public function isvaludusername(){
        $valid = true;
        $username=$this->input->post('username');
        $valid=$this->Init_models->validateusername($username);
        echo json_encode(array(
            'valid' => $valid,
        ));
    }

}
