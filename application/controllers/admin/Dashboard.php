<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
        redirect('index.php/login');
    }
    if (!($this->session->userdata('role') == 'admin')){
    	redirect('index.php/home');
    }
    }

    
	public function index()
	{
             $view_params = array(
                'm_title' => 'Admin Dashboard',
                'title'   => 'Admin Dashboard'
            );
             $view_params['devent_count'] = $this->Init_models->get_all_event_count();
             $view_params['daevent_count'] = $this->Init_models->get_approved_event_count();
             $view_params['all_users'] = $this->Init_models->get_all_users_count();
             $view_params['all_school'] = $this->Init_models->get_all_school_count();
             $view_params['approved_school'] = $this->Init_models->get_approved_school_count();
             $view_params['all_advertise'] = $this->Init_models->get_all_advertise_count();
             $view_params['approved_advertise'] = $this->Init_models->get_approved_advertise_count();
		$this->load->view('admin/dashboard',$view_params);
	}
}
