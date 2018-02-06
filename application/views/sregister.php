<?php  $this->load->view('header'); ?>
        <div class="regist-wrap ">
            <div class="row">
<?php   if ($this->session->flashdata('message')) {
    ?>
    <div class="message flash">
      <div class="message-data">
        <p class="success-msg"><?php echo $this->session->flashdata('message'); ?></p>
      <a href="<?php echo base_url().'/login'?>"  <button class="btn success-close">Login</button></a>
        </div>   
        </div>
    <?php
    }

?> 
                <div class="col s12 m9">
                    <div class="regist_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Register as a Member</h2></div>
                            <div class="col m12 s12">
                                <div class="instrction_box">
                                    <p><strong>Brief Instruction</strong></p>
                                    <p>1.Registration is open to Aspirants,students & Graduates.</p>
                                    <p>2.Aspirants should select the institution they intend to get into.</p>
                                    <p>3.Graduates should select the institute they graduated from.</p>
                                </div>
                                <form id="sregister" method="post"class="row" action="<?php echo base_url(). 'index.php/csregister'?>">
                                    <h4 class="red-text">Community Information</h4>

                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="schooltype">

                                                            <option value="">select your school type</option>
                                                             <option value="University">University</option>
                                                            <option value="Polytechnic">Polytechnic</option>
                                                             <option value="college of education">college of education</option>
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="school">

                                                            <option value="">select your school</option>
                                                             <option value="anything">anything</option>
                                                            <option value="anything">anything</option>
                                                             <option value="friendship">friendship</option>
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="level">

                                                            <option value="">select level</option>
                                                             <option value="aspirant">aspirant</option>
                                                            <option value="student-100 level">student-100 level</option>
                                                             <option value="student-200 level">student-200 level</option>
                                                             <option value="student-300 level">student-300 level</option>
                                                             <option value="student-400 level">student-400 level</option>
                                                             <option value="student-500 level">student-500 level</option>
                                                             <option value="student-600 level">student-600 level</option>
                                                             <option value="student-700 level">student-700 level</option>
                                                             <option value="student-800 level">student-800 level</option>
                                                             <option value="graduate">graduate</option>
                                                             <option value="classified">classified</option>
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="department" name="department" type="text" class="validate">
                                        <label for="department">Department</label>
                                    </div>
                                    <h4 class="red-text">Login Information</h4>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption1" type="text" name="username" class="validate">
                                        <label for="Caption1">Username</label>
                                        <span id="usernamemsg"></span>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption2" type="password" name="password" class="validate">
                                        <label for="Caption2">password</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                        <input id="Caption3" name="cpassword" type="password" class="validate">
                                        <label for="Caption3"> confirm password</label>
                                    </div>
                                      <div class=" col s2">
                                          <p class="right-align">Connect2Me</p>
                                    </div>  <div class=" col s8">
                                        <input type="checkbox" id="Chic" />
                                        <label for="Chic">Enable Connect2me! Allow my profile to be viewed so people can connect2me</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="faction">Register:continue

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 margin-t-15">
                    <div class="online_std z-depth-1">
                          <ul class="online_std_list">
                       <?php 
//print_r($related_users);
                       foreach ($related_res as $row){ ?>
                            <li>
                            <?php $pimg = $row['user_avatar']; ?>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $pimg; ?>"> 
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row['user_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
                                        <p class="std_university"><?php echo $row['user_gender']; ?></p>
                                        <p class="std_name"><?php echo $row['user_school']; ?></p>
                                    </div>
                                </div> 
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
<!--<script type="text/javascript" src="<?php //echo base_url() .'js/sregister-validate.js' ?>"></script>-->

<script>

            $(document).ready(function(){
              //  alert('dfd');
                /*$("#Caption1").blur(function(){
                    if($(this).val() ){
                    var value = $("input[name=username]").val();
                        $.ajax({
                            context: this,
                            
                            type: 'POST',
                            url: "validate_ajax",
                            data: {value},
                            success: function(data) {
                                console.log(data);

                                if($.trim(data) == '1'){
                                        $('#usernamemsg').html("<span style='color:#D8000C'>Username is Already Exist</span>");
                                       $("#sregister").submit(function(e){
                                            e.preventDefault();
                                        });
                                }else{
                                    $('#usernamemsg').html("<span style='color:#4CAF50'>Username is Available</span>");
                                        $("#sregister").submit(function(e){
                                            e.currentTarget.submit();
                                        });
                                }   
                            }
                            });
                        }else{
                            $("#usernamemsg").html('');
                        }
                        });*/


                        $('#sregister').bootstrapValidator({
                                /*feedbackIcons: {
                                    valid: 'glyphicon glyphicon-ok',
                                    invalid: 'glyphicon glyphicon-remove',
                                    validating: 'glyphicon glyphicon-refresh'
                                },*/
                                fields: {
                                    schooltype: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Please enter schooltype!!!..'
                                            }
                                        }
                                    },
                                      school: {
                                        validators: {
                                            notEmpty: {
                                                message: ' please select school!!!..'
                                            }
                                        }
                                    },
                                      level: {
                                        validators: {
                                            notEmpty: {
                                                message: ' please select level!!!..'
                                            }
                                        }
                                    },
                         
                                          
                                      
                                    department: {
                                        validators: {
                                            notEmpty: {
                                                message: ' required!!!..'
                                            }
                                        }
                                    },
                         
                                       
                                    username: {
                                        validators: {
                                            notEmpty:{ 
                                                message:'please enter username!!'

                                            },
                                             regexp: {
                                             regexp: /^[\w]+$/,
                                                message: 'You can introduce just alphabetical characters, underscore, number but no spaces'
                                            },
                                            remote: {
                                                type: 'POST',
                                                url: '<?php echo base_url();?>index.php/sregister/isvaludusername',
                                                message: 'The username is not available'
                                            }
                                          
                                        }
                                    },

                              password: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The password is required and can\'t be empty'
                                            },
                                            identical: {
                                                field: 'cpassword',
                                                message: 'The password and its confirm are not the same'
                                            },
                                            
                                        }
                                    },
                                    cpassword: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The confirm password is required and can\'t be empty'
                                            },
                                            identical: {
                                                field: 'password',
                                                message: 'The password and its confirm are not the same'
                                            }
                                        }
                                    },
                                          
                                          


                                }
                            });

                    });

                </script>