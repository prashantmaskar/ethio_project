<?php  $this->load->view('header'); ?>

  <style type='text/css'> 
 /* a, a:visited { 
  outline: none; color: #7d5f1e; 
  } */
  .clear { 
  clear: both;
  } 
  #wrapper { 
  width: 480px; margin: 0 auto 0 4px; padding: 15px 0px; 
  } 
  .comment_box 
  { padding: 5px;  margin-top: 15px; list-style: none; background: white;
  } 
  .aut { font-weight: bold; 
  } 
  .timestamp { font-size: 85%; 
    /*float: right; */
  } 
 .reply{float: left;}
  #comment_body { display: block; width: 100%; height: 150px;
  } 

 /*a {
  color: #03658c;
  text-decoration: none;
 }*/

ul {
  list-style-type: none;
}

body {
  font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
  background: #dee1e3;
}
}
</style> 


      <div class="service-wrap ">
      <div class="row">
         <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
          
    <div class="col s12 m8  grid-example z-depth-1">
<div class="col s12 m12 l12">
        <div class="container"> 
        <div class="starter-template"> 
       <!-- <h1><?php $news//->question_desc ?></h1>  --> 
      <!--  <?php //foreach($news as $row){?> -->
      <div class="course_info">
        <span class="p-h">
         <p class="lead black-text"><h1 class = "page-heading">Gist:<?php echo $ques->post_title ?></h1></p>
         </span>
        </div>
        <!-- <p><img src="<?php //echo base_url(); ?>global/uploads/<?= $news//->ne_img ?>"/>
        </p>  -->
        <p> 
        </p> <?php  $sname= $this->session->userdata('susername');?>
        </div> 
        <div class="col m12 s12 card-panel"> <?php echo $comments ?> 
        <div class="comment_info"><h3 class="page-heading"> Leave a Reply </h3></div>  
         <p class="notice error"><?php $this->session->flashdata('error_msg'); ?></p><br/>
         <?php  if ( !$this->session->userdata('logged_in')){?>
 <div class="col m12">
    <p class="black-text gist-heading">Oops! comment box is not visible to you because you're not logged in  <a href="<?php echo base_url() ?>index.php/login">Login here</a></p>
   
</div>
     <?php 
    } else{?> 
         <form id="comment_form" action="<?= base_url() ?>gist_details/add_gist_comment/<?= $ques->post_id ?> " method="post" >
          <div class="form-group"> 
          <label for="comment_name">Name:</label> 
          <input class="form-control" type="text"  name="comment_name" id='name' value="<?php echo $sname ?>" readonly />
          </div>
           <div class="form-group"> 
           <label for="comment"><!-- <i class='material-icons prefix'>mode_edit</i> -->Comment :</label> 
           <textarea class="form-control" name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'></textarea>
            </div> 
            <input type='hidden' name='pparent_id' value="0" id='parent_id' />
            <input type='hidden' name='presponse_type' value="gist" id='response_type' />
            
            <input type='hidden' name='presponse_like' value="0" id='response_like' />
        <input type='hidden' name='post_id' id='parent_id' value="<?= $ques->post_id ?>"/> 

             <div id='submit_button' class="margin-b-10"> 
             <input class="btn btn-success" type="submit" name="submit" value="add comment"/> 
             </div> 
             </form> 
             <?php }?>
             </div> 
             </div><!-- /.container --> 
             </div>
    </div>
     <div class="col s12 m2 grid-example">
               <div class="service_col z-depth-1  darken-1">
                  <a href="#">
                  <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                  </a>
               </div>
               <div class="service_col z-depth-1  darken-1">
                  <a href="#">
                  <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                  </a>
              </div>
        </div> 


 





  </div><!-- ok -->
</div><!-- ok -->
     
      <?php $this->load->view('footer'); ?>
      <script type="text/javascript" src="<?php echo base_url() .'js/newsdetails.js' ?>"></script>
      <script> 
$(function () {
  $("a.reply").click(function () 
  { var id = $(this).attr("id"); 
  $("#parent_id").attr("value", id); 
  $("#name").focus();
  }); 
  }); </script>

<script>



         function like(id1, id2, id3,id4,id5){                      
                         var ques_id= id1
                         var u_id = id2;
                         var res_id = id3; 
                         var par_id = id4;
                         var like_stat = id5;

                     if (confirm('Sure to Like ?'))
                             {
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikegist',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                    
                                     success: function(data) {
                                      
                                         console.log(data);
                                       location.reload();
         
                                     },
                                     error:function(error){
                                      alert("error" +error);
                                     }
                                 });
                             }
                         }
                        
         
         
                        function unlike(id1 ,id2,id3,id4,id5){
                          var ques_id= id1
                         var u_id = id2;
                         var res_id = id3;
                         var par_id = id4; 
                         var like_stat = id5;


                         
                     if (confirm('Sure to Unlike ?'))
                             {
                              alert(like_stat);
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikegist',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                      success: function(msg) {
                                         console.log(msg);
                                       location.reload();
                               },
                               error:function(error){
                                      alert("fgfdg" +error);
                                     }
                             });
                          }
                     }

  </script>