<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
           $this->load->model('Init_models');
       if ($this->session->userdata('logged_in'))
    { 
       $this->session->sess_destroy();
    }
    }

	public function index()
	{





 if(isset($_POST['action'])){
   // echo"<script>alert('1');</script>";


$captcha_info = $this->session->userdata('captcha_info');

if ($captcha_info['code'] != $this->input->post('captcha'))
{
    //don't process the form
  echo "Invalid Captcha ...!";
  exit();
}else{


          $username = $this->input->post("username");
          $password = $this->input->post('password');

          $this->form_validation->set_rules("username", "Username", "trim|required");
          $this->form_validation->set_rules("password", "Password", "trim|required");
//echo"<script>alert('2');</script>";
          if ($this->form_validation->run() == FALSE)
          {//echo"<script>alert('3');</script>";

              $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');

          }
      else{

       $usr_result = $this->Init_models->get_user_credentials($username, $password);
     

      if ($usr_result){ 
                    foreach ( $usr_result as $row)
                      {
                              $suname = $row['username'];
                              $suserid =  $row['user_id'];
                              $userrole =  $row['user_role'];
                      }
                    $sessiondata = array(
                              'susername' => $suname,
                              'suserid' => $suserid,
                              'role' => $userrole,
                              'logged_in' => TRUE
                         );

                        $this->session->set_userdata($sessiondata);
                        if($this->session->userdata('role') == 'admin'){
                        redirect("index.php/admin/dashboard");
                      }
                      else{
                        //redirect("index.php/home");
                        $referred_from = $this->session->userdata('referred_from');
                        redirect($referred_from, 'refresh');
                      }
                    }
                    
                    
        
     	}  
      }
    }

    $this->load->library('captcha');

             $view_params = array(
                'm_title' => 'Login Page',
                'title'   => 'Login Page',
                'captcha' => $this->captcha->main()
            );

$this->session->set_userdata('captcha_info', $view_params['captcha']);


    $this->load->view('login',$view_params);
	}

  public function fergot_password()
  {
      $view_params = array(
                'm_title' => 'Forgot Password',
                'title'   => 'Forgot Password',
            );
    $this->load->view('fergetpass',$view_params);
  }

  public function sendfergetemail(){


     $usr_result = $this->Init_models->get_userby_email($this->input->post('email'));
     if(count($usr_result)>0){

        $from_email = "santosh.bhosale123@gmail.com"; 
        $to_email = $this->input->post('email');
        $key=md5(time());

        if($this->Init_models->setverificationkeyby_email($to_email,$key)){
               //Load email library 
             $this->load->library('email'); 
             $this->email->set_mailtype("html");
             $this->email->from($from_email, 'Santosh Bhosale'); 
             $this->email->to($to_email);
             $this->email->subject('Ferget Password Link'); 
             $this->email->message('Please <a href="'.base_url().'index.php/login/resetpassword?email='.$to_email.'&key='.$key.'" >Click here</a> to reset password '); 
              //remove this var_dump when uploded to server
              var_dump('Please <a href="'.base_url().'index.php/login/resetpassword?email='.$to_email.'&key='.$key.'" >Click here</a> to reset password ');
             //Send mail 
             if($this->email->send()) {
                $this->session->set_flashdata('msg', '<div class="alert alert-sucess text-center">Reset mail sent to your email address!</div>');
             }else{
                 $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Unable to send mail to your email address!</div>');
             }
        }else{
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Someting went wrong!</div>');
         
        }
        
     }else{
           $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Record not found!</div>');
         
     }
     $view_params = array(
                'm_title' => 'Forgot Password',
                'title'   => 'Forgot Password',
            );
    $this->load->view('fergetpass',$view_params);
         
  }

  public function resetpassword(){
      $usr_result = $this->Init_models->get_userby_email($this->input->get('email'));
     if(count($usr_result)>0){
        
        if($usr_result[0]['verificationcode']==$this->input->get('key')){
            $view_params = array(
                'title'=> 'Reset Password',
                'key' => $usr_result[0]['verificationcode'],
                'email'   => $usr_result[0]['user_email'],
            );
            $this->load->view('resetpass',$view_params);
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Record not found!</div>');
            $view_params = array(
                        'm_title' => 'Forgot Password',
                        'title'   => 'Forgot Password',
                    );
            $this->load->view('fergetpass',$view_params);
        }
     }else{
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Record not found!</div>');
        $view_params = array(
                'm_title' => 'Forgot Password',
                'title'   => 'Forgot Password',
            );
          $this->load->view('fergetpass',$view_params);
     }
  }


  public function resetpassaction(){
    $key=$this->input->post('key');
    $email=$this->input->post('email');
    $password=$this->input->post('password');
     $usr_result = $this->Init_models->get_userby_email($email);
     if(count($usr_result)>0){
        
        if($usr_result[0]['verificationcode']==$key){

          if($this->Init_models->resetpassbykey($email,md5($password))){
              echo 'password changed successfully..';
          }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Something went wrong!</div>');
            $view_params = array(
                        'm_title' => 'Forgot Password',
                        'title'   => 'Forgot Password',
                    );
            $this->load->view('fergetpass',$view_params);
          }


         }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Record not found!</div>');
            $view_params = array(
                        'm_title' => 'Forgot Password',
                        'title'   => 'Forgot Password',
                    );
            $this->load->view('fergetpass',$view_params);
        }
     }else{
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Record not found!</div>');
        $view_params = array(
                'm_title' => 'Forgot Password',
                'title'   => 'Forgot Password',
            );
          $this->load->view('fergetpass',$view_params);
     }
  }


}
