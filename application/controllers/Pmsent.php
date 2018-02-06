<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pmsent extends CI_Controller {

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

        if ( !$this->session->userdata('logged_in'))

    { 
        $this->session->set_userdata('referred_from', current_url());
        redirect('index.php/login');
    }
    }


    public function index() {
        $sessid= $this->session->userdata('suserid');

        $related_res = $this->Init_models->related_users($sessid);

        $banners = $this->Init_models->getadvertisebanners();
        $view_params = array(
            'm_title' => 'Sent Items',
            'title' => 'Sent Items',
            'banners' => $banners,
            'related_res' => $related_res,

        );
        $view_params['getsentmsg'] = $this->Init_models->getsentmsg($sessid);
        $view_params['sent_count'] = $this->Init_models->getsentitemcount($sessid);
        $view_params['inbox_count'] = $this->Init_models->getinboxitemcount($sessid);
        $this->load->view('pmsent',$view_params);
    }

}
