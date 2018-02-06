<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller {

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
                'm_title' => 'Admin privacy_policy',
                'title'   => 'Admin privacy_policy'
            );
    $view_params['policy_details'] = $this->Init_models->get_policy_details();
    $view_params['policy_count'] = $this->Init_models->get_policy_count();
		$this->load->view('admin/privacy_policy',$view_params);

    if(isset($_POST['addaction'])){
        $this->add();
        }

        if(isset($_POST['editaction'])){
        $this->edit();
        }
	}

    public function add()
       {
            

                
                         $date = date('Y-m-d');
                        date_default_timezone_set('Asia/Kolkata');
                        $time = date('h:i:s A', time());
                        $sessid= $this->session->userdata('suserid');
                     
                        $data=array(
                'post_title' => $this->input->post('caption'),
                'post_desc'  => $this->input->post('Description'),
               
               'post_date' => $date,
                'post_time' => $time,
                'post_type'=>  $this->input->post('post_type'), 
                'user_id'=> $sessid

        );
                        
              if ($this->Init_models->add_anews($data))
            {
            $this->session->set_flashdata('message', 'data added Successfully'); 
            redirect("index.php/admin/privacy_policy");
            }

               

   
}
 public function edit()
      {
            

                
                $date = date('Y-m-d');
                        date_default_timezone_set('Asia/Kolkata');
                        $time = date('h:i:s A', time());

        $data=array(
                  'post_id' => $this->input->post('post_id'),
                  'post_title' => $this->input->post('caption'),
                  'post_desc'  => $this->input->post('Description'),
                  
                  'post_type'=>  $this->input->post('post_type'),
                  'post_date' => $date,
                  'post_time' => $time
             );
                  $isinserted = $this->Init_models->edit_privacy($data);
                        

                        
             

               if(isset($isinserted)){
            echo"<script>alert('Data Edited Successfully');</script>";
                redirect("index.php/admin/privacy_policy");
               }else{
                   echo"<script>alert('Failed');</script>";
               }

    }
  
                
}


