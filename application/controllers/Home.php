<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $sessname = $this->session->userdata('susername');
        $sessid= $this->session->userdata('suserid');
    }


    public function index() {
         $banners = $this->Init_models->getadvertisebanners();

        $view_params = array(
            'm_title' => 'WelCome To EthioEdu',
            'title' => 'WelCome To EthioEdu',
               'banners' => $banners    
        );
        $view_params['homenews'] = $this->Init_models->gethomenews();
        $view_params['homeschool'] = $this->Init_models->gethomeschool();
        $view_params['homeprojects'] = $this->Init_models->gethomeprojects();
        $view_params['homeevents'] = $this->Init_models->gethomeevents();
        $view_params['homevacancy'] = $this->Init_models->gethomevacancy();
        $view_params['homequestions'] = $this->Init_models->gethomequestion();
        $view_params['news'] = $this->Init_models->selectnews();
        $view_params['previous_vacancy'] = $this->Init_models->get_previous_vacancy();
        $this->load->view('home',$view_params);
    }

}
