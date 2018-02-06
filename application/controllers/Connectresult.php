<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Connectresult extends CI_Controller {

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
        $this->load->library(array('session', 'form_validation', 'pagination', 'email','MY_Input'));
        $this->load->database();
        $this->load->model('Init_models');
    }


    function display($query_id = 0, $sort_by = 'first_name',$sort_order = 'asc', $offset = 0 ){


        $limit = 1;
        $data['fields']= array(
        'username'=>'username',  
        'first_name'=>'first_name',
        'last_name'=>'last_name',
        'user_school'=>'user_school',
        'user_level'=>'user_level',
        'user_email'=>'user_email',
        'user_dept'=>'user_dept',
        'user_gender'=>'user_gender',
        'user_age'=>'user_age',
        'mobile_no'=>'mobile_no',
        'user_avatar'=>'user_avatar',
        'marital_status'=>'marital_status',
        'interested_in'=>'interested_in',
        'about_useruser_interest'=>'about_user',
        'user_interest'=>'user_interest',
        'user_hobby'=>'user_hobby',


            );
        //print_r( $data['fields']);

        $sessid= $this->session->userdata('suserid');
        $related_res = $this->Init_models->related_users($sessid);
        $banners = $this->Init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Connect Result',
                'title'   => 'Connect Result',
                'banners' => $banners,
                'related_res' => $related_res,
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'username'=> $this->input->get('username'),
           'user_gender'=> $this->input->get('user_gender'),
           'user_gender'=> $this->input->get('user_gender'),
           'user_age'=> $this->input->get('user_age'),
           'user_school'=> $this->input->get('user_school'),
           'user_level'=> $this->input->get('user_level'),
           'user_interest'=> $this->input->get('user_interest'),
    );
       //

   $results = $this->Init_models->search_result($query_array, $limit, $offset, $sort_by, $sort_order);
   //echo $this->db->last_query();

   $data['conresult']= $results['rows'];

   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/connectresult/display/$query_id/$sort_by/$sort_order");
     $config['total_rows'] = $data['num_results'];
     $config['per_page'] = $limit;
     $config["uri_segment"] = 6;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

     $this->pagination->initialize($config);
     $data['pagination'] = $this->pagination->create_links();
//print_r($data);
       $this->load->view('connectresult',$data);

    }



    public function index($query_id = 0, $sort_by = 'school_name',$sort_order = 'asc', $offset = 0 ) {
       
   
        $limit = 1;
        $data['fields']= array(
        'username'=>'username',
        'first_name'=>'first_name',
        'last_name'=>'last_name',
        'user_school'=>'user_school',
        'user_level'=>'user_level',
        'user_email'=>'user_email',
        'user_dept'=>'user_dept',
        'user_gender'=>'user_gender',
        'user_age'=>'user_age',
        'mobile_no'=>'mobile_no',
        'user_avatar'=>'user_avatar',
        'marital_status'=>'marital_status',
        'interested_in'=>'interested_in',
        'about_useruser_interest'=>'about_user',
        'user_interest'=>'user_interest',
        'user_hobby'=>'user_hobby',

            );
        $sessid= $this->session->userdata('suserid');
        $related_res = $this->Init_models->related_users($sessid);
        $banners = $this->Init_models->getadvertisebanners();
                $data = array(
                'm_title' => 'Connect Result',
                'title'   => 'Connect Result',
                'banners' => $banners,
                'related_res' => $related_res,
            );


       $this->input->load_query($query_id);

        $query_array =   array(

           'username'=> $this->input->get('username'),
           'user_gender'=> $this->input->get('user_gender'),
           'user_gender'=> $this->input->get('user_gender'),
           'user_age'=> $this->input->get('user_age'),
           'user_school'=> $this->input->get('user_school'),
           'user_level'=> $this->input->get('user_level'),
           'user_interest'=> $this->input->get('user_interest'),
    );
       //

   $results = $this->Init_models->search_result($query_array, $limit, $offset, $sort_by, $sort_order);
   $this->db->last_query();

   $data['conresult']= $results['rows'];

   $data['num_results'] = $results['num_rows'];
    
    $config = array();

     $config['base_url'] = base_url("index.php/connectresult/display/$query_id/$sort_by/$sort_order");
     $config['total_rows'] = $data['num_results'];
     $config['per_page'] = $limit;
     $config["uri_segment"] = 6;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

     $this->pagination->initialize($config);
     $data['pagination'] = $this->pagination->create_links();
//print_r($data);
       $this->load->view('connectresult',$data);
    }



    function search(){
     
       $query_array =   array(

           'username'=> $this->input->post('username'),
           'user_gender'=> $this->input->post('gender'),
           'user_age'=> $this->input->post('choiceage'),
           'user_school'=> $this->input->post('institutions'),
           'user_level'=> $this->input->post('level'),
           'user_interest'=> $this->input->post('interest'),
            );

         $query_id = $this->input->save_query($query_array);

         redirect("index.php/connectresult/display/$query_id");


    }


}
