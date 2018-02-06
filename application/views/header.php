<!DOCTYPE html>
<html lang="en">        
    <head>
        <?php
                header("Cache-Control:no-cache, no-store, must-revalidate");
                header("Pragma:no-cache");
                header("Expires:0");
         ?>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrapValidator.css'?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />
       
        <!-- Create Session Variable -->
        <?php

       $sessname = $this->session->userdata('susername');
        $sessid= $this->session->userdata('suserid');
        ?>

    </head>
    <body>
    <div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
FB.init({appId: '383265445346580', status: true, cookie: true,
xfbml: true});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
'//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>
        <div class="header-top grey darken-3 ">

            <div class="row">
                <div class="col s12 ">
                    <ul class="top-nav">
                        <li><a href="#">INFO@ETHIOEDU.COM</a></li>


                        <li><a class="<?php if($this->uri->segment(1)=="Contacts_Hotline"){echo "active";}?>" href="<?php echo base_url() . 'index.php/Contacts_Hotline' ?>">CONTACT/HOTLINE</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="About_us"){echo "active";}?>" href="<?php echo base_url() . 'index.php/About_us' ?>">ABOUT US</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>" href="<?php echo base_url() . 'index.php/contact' ?>">CONTACT US</a></li>
                            <?php if (!$this->session->userdata('logged_in'))
                             { ?>
                        <li><a class="<?php if($this->uri->segment(1)=="sregister"){echo "active";}?>" href="#">REGISTER </a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="login"){echo "active";}?>" href="<?php echo base_url() . 'index.php/login' ?>">LOGIN</a></li>
                            <?php }
                            else{ ?>
                            <?php
    $query = $this->db->query("select user_avatar from tbl_user_meta where user_id= '" .$sessid. "'"); ?>
    <li class="user-opt-list"><div class="user-avatar">
   <?php     foreach ($query->result_array() as $row){  
 $getavatar = $row['user_avatar'];
          ?> 
                            <img src="<?php echo base_url()?>/uploads/<?php echo $getavatar; ?>" class="circle responsive-img valign profile-image"> <?php } ?></div><a class='dropdown-button' href='#' data-activates='dropdownl'><?php echo $sessname; ?></a>
<?php
// foreach($event->result_array() as $row){
{
  $sessid= $this->session->userdata('suserid');
    $query1 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event' and user_id= '" .$sessid. "'");

    /*var_dump("select count(*) as row_count from tbl_posts where post_type='event' and user_id= '" .$sessid. "'");
    exit();*/
    ?>


  <?php
      $sessid=$this->session->userdata('suserid');
      $query2=$this->db->query("select count(*) as row_count from tbl_questions where user_id= '" .$sessid."'");

     $query3= $this->db->query("select count(*) as row_count from tbl_message where pm_send_to = '" .$sessid. "'");
     $query4= $this->db->query("select count(*) as row_count from tbl_school_meta where user_id='".$sessid."'");

  ?>   
 <ul id='dropdownl' class='dropdown-content'>
 <li><a href="<?php echo base_url() . 'index.php/edituser' ?>">Edit Profile</a></li>
 <li class="divider"></li>
 <!-- <li><a href="<?php //echo base_url() . 'index.php/edituserschool?id=7'?>">Edit School()</a></li> -->
 
 <li><a href="<?php echo base_url() . 'index.php/userschoollist'?>">MySchools(<?php echo $query4->result()[0]->row_count; ?>)</a></li>
 <li class="divider"></li>
    <li><a href="<?php echo base_url(). 'index.php/pminbox'?>">Inbox(<?php echo $query3->result()[0]->row_count; ?>)</a></li>
      <li class="divider"></li>
   <!--  <li><a href="#">Comments( )</a></li> -->
      <!-- <li class="divider"></li> -->
     <li><a href="<?php echo base_url(). 'index.php/QuesAns'?>">Askaquestion(<?php echo $query2->result()[0]->row_count; ?>)</a></li>
       <li class="divider"></li>
      <li><a href="<?php echo base_url(). 'index.php/event'?> ">Events(<?php echo $query1->result()[0]->row_count; ?>  )</a></li>
    <li class="divider"></li>
   <li><a href="<?php echo base_url() . 'index.php/logout' ?>">Logout</a></li>
  
                           <!--   <?php } ?> -->
                            
                            <?php } ?>
                    </ul>

                </div>
            </div>
        </div>
        <div class="header-top1 grey darken-4 ">

            <div class="row">
                <div class="col s3 ">
                   <a href="<?php echo base_url().'index.php/home'?>"> <img class="logo_bar roundElement" src="<?php echo base_url() . 'images/logo.png' ?>" ></a>
                </div>
                <div class="col s9 ">
                    <div class="upper_slider">
                         
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/benner_Horizontal1.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal2.png' ?>"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="navbar-fix">
            <nav class="grey darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <ul id="dropdown1" class="dropdown-content dropdown-menu">
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Report News</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Latest Gist & Gossip</a></li>
                    </ul>
					<ul id="dropdown2" class="dropdown-content dropdown-menu">
                        <li><a href="#">Project Topics</a></li>
						<li><a href="#">Events</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Questions & Answers</a></li>
						<li><a href="#">Advertise with us</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a  class="<?php if($this->uri->segment(1)=="home"){echo "active";}?>" href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

                        <li><a class="dropdown-button home-btn <?php if($this->uri->segment(1)=="news" || $this->uri->segment(1)=="reportnews" || $this->uri->segment(1)=="gist"){echo "active";}?>" href="#!" data-hover="true" data-activates="dropdown1">LATEST NEWS</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="schools"){echo "active";}?>" href="#">SCHOOLS</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="course"){echo "active";}?>" href="#">COURSES</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="vactender"){echo "active";}?>" href="#">VACANCY/TENDER</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="connectme"){echo "active";}?>" href="#">CONNECT TO ME</a></li>
                        <li><a class="dropdown-button home-btn <?php if($this->uri->segment(1)=="Projectlist" || $this->uri->segment(1)=="event" || $this->uri->segment(1)=="tips" || $this->uri->segment(1)=="QuesAns"){echo "active";} ?>" href="" data-hover="true" data-activates="dropdown2">SERVICE</a></li>

                    </ul>

                    <ul id="nav-mobile" class="side-nav mobile-nav">
                        <li><a href="#">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" >LATEST NEWS</a></li>
                        <li><a href="#">SCHOOLS</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
                        <li><a class="dropdown-button home-btn" href="#!">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>


