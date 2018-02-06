<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m10 grid-example">
                    <div class="about_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">About Us</h1>
                            </div>
                        </div>
                        <div class="offset col s12 m12 z-depth-1">
                        <?php foreach($about as $row){?> <div class="about-image "><?php 
                        if(!$row['post_attachment'] == ""){
                        $tips_attachment = $row['post_attachment']; ?><img class="responsive-img" src="<?php echo base_url() . 'uploads/'.$tips_attachment ?>" style="width:600px;height:300px;"><?php }else{ ?>
                            <img class="responsive-img" src="<?php echo base_url() .'uploads/default-image.jpg' ?>" style="width:600px;height:300px;">
                           <?php }?></div>
                        <div class="col s12 m12 t20margin">
                            <div class="about_content">
                             <p class="black-text"><?php echo $row['post_desc'];?></p>
                           </div>
                        <!--   <div>

                         <iframe width="420" height="315"
                  src="https://www.youtube.com/embed/1FJwzZMAGMM">
                        </iframe>                                        


                            <p class="black-text" >ETHIOEDU.com is a community website dedicated to providing free information on educational institutions in ETHIOPIA. Our free online directory contains very useful information on all schools, colleges and universities in ETHIOPIA. ETHIOEDU.com also contains very useful resources such as past examinations question papers for schools, colleges and universities. We also have a very interactive and mederated discussion forum. ETHIOEDU.com was started with the aim of easing the process of searching for educational information in ETHIOPIA. We hope that you will find information on this website useful. Please feel free to Contact Us in case of any queries, comments or suggestions.</p> 
                            
                            </div> -->
                        </div> <?php }?>
                        <div class="col s12 m12">
                            <div class="social_button_wrap">
                                <ul class="social_button_list">
                                    <li class="social_mail">
                                        <a href="#"><i class="fa fa-envelope"></i> Mail</a>
                                    </li>
                                      <li class="social_facbook">
                                        <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                                    </li>
                                      <li class="social_linkedin">
                                        <a href="#"><i class="fa fa-linkedin"></i> Linkedin</a>
                                    </li>
                                      <li class="social_twitter">
                                        <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                    </li>
                                      <li class="social_google">
                                        <a href="#"><i class="fa fa-google-plus"></i> Google+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
</div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner-Vertical.jpg">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner_Vertical.jpg">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>