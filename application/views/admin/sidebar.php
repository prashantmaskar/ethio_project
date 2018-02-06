
                                <?php 
                                $sessid= $this->session->userdata('suserid');
                                $query1 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event'");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event' and post_approve = 1");
                               $allevent =  $query1->result()[0]->row_count;
                               $aevent =  $query2->result()[0]->row_count;
                                $feventcount = $allevent- $aevent;


                                $query1 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='news'");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='news' and post_approve = 1");
                               $allnews =  $query1->result()[0]->row_count;
                               $anews =  $query2->result()[0]->row_count;
                                $fnewscount = $allnews- $anews;


                                $query1 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='gist'");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='gist' and post_approve = 1");
                               $allgist =  $query1->result()[0]->row_count;
                               $agist =  $query2->result()[0]->row_count;
                                $fgistcount = $allgist- $agist;


                                $query1 = $this->db->query("select count(*) as row_count from tbl_school_meta");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_school_meta where school_approve = 1");
                               $allschool =  $query1->result()[0]->row_count;
                               $aschool =  $query2->result()[0]->row_count;
                               $fschoolcount = $allschool- $aschool;


                               $query1 = $this->db->query("select count(*) as row_count from tbl_vacancy");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_vacancy where vacancy_approve = 1");
                               $alltender =  $query1->result()[0]->row_count;
                               $atender =  $query2->result()[0]->row_count;
                               $ftendercount = $alltender- $atender;

                               $query1 = $this->db->query("select count(*) as row_count from tbl_course");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_course where course_approve = 1");
                               $allcourse =  $query1->result()[0]->row_count;
                               $acourse =  $query2->result()[0]->row_count;
                               $fcoursecount = $allcourse- $acourse;


                               $query1 = $this->db->query("select count(*) as row_count from tbl_projects");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_projects where project_approve = 1");
                               $allproject =  $query1->result()[0]->row_count;
                               $aproject =  $query2->result()[0]->row_count;
                               $fprojectcount = $allproject- $aproject;

                               $query1 = $this->db->query("select count(*) as row_count from tbl_questions");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_questions where question_approve = 1");
                               $allquestion =  $query1->result()[0]->row_count;
                               $aquestion =  $query2->result()[0]->row_count;
                               $fquestioncount = $allquestion- $aquestion;

                                
                                
                            ?>
                    <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <?php 
                                    $sessid= $this->session->userdata('suserid');
                                    $query = $this->db->query("select user_avatar from tbl_user_meta where user_id= '" .$sessid. "'"); 

                                    foreach ($query->result_array() as $row){  
                                        $getavatar = $row['user_avatar'];
                                    }
                                    ?> 
                                    <img src="<?php echo base_url()?>/uploads/<?php echo $getavatar;?>" class="circle responsive-img valign profile-image" >
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                    <?php $susername = $this->session->userdata('susername');
                                        echo $susername;  ?>
                                       
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
                        <li class="bold active">
                            <a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                         <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        User Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Listuser' ?>">List User</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        School Manage <?php if(!$fschoolcount == 0){ ?><span class="count-indicator"><?php echo $fschoolcount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addschool' ?>">Add School</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Listschool' ?>">List School</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Course Manage <?php if(!$fcoursecount == 0){ ?><span class="count-indicator"><?php echo $fcoursecount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addcourse' ?>">Add Course</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listcourse' ?>">List Course</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        News Manage <?php if(!$fnewscount == 0){ ?><span class="count-indicator"><?php echo $fnewscount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addnews' ?>">Add News</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/posts'.'?post_type=news'?>">List News</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                         <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Gist Manage <?php if(!$fgistcount == 0){ ?><span class="count-indicator"><?php echo $fgistcount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addgist' ?>">Add Gist</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/posts'.'?post_type=gist'?>">List Gist</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Tender Manage <?php if(!$ftendercount == 0){ ?><span class="count-indicator"><?php echo $ftendercount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addtender' ?>">Add Tender</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listtender' ?>">List Tender</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                         <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Event Manage <?php if(!$feventcount == 0){ ?><span class="count-indicator"><?php echo $feventcount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Events' ?>">Add Event</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/posts'.'?post_type=event'?>">List Event</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Tips & About Us
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addtips' ?>">Add Tips</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/AddAbout' ?>">Add AboutUs</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/privacy_policy' ?>">Add P_Policy</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listtips'?>">List Tips</a>
                                            </li>
                                             
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Service Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                         <li><a href="<?php echo base_url() . 'index.php/admin/Project_Topic' ?>">Project Topics  <?php if(!$fprojectcount == 0){ ?><span class="count-indicator"><?php echo $fprojectcount; ?></span><?php } ?></a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/advertise' ?>">Advertise</a>
                                            </li>
                                            <li><a href="#">Past Exam</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/quesanswer' ?>">Question & Answer <?php if(!$fquestioncount == 0){ ?><span class="count-indicator"><?php echo $fquestioncount; ?></span><?php } ?></a>
                                            </li>
                                           
                                            
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Manage Categories <?php if(!$ftendercount == 0){ ?><span class="count-indicator"><?php echo $ftendercount; ?></span><?php } ?>
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/addcategory' ?>">Add Category</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listcategory' ?>">List Categories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>                   
                </aside>