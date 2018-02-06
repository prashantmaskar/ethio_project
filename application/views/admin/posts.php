<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
              <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    
                                    <?php if(isset($_GET['post_type']))
                                    {
                                        $type = $_GET['post_type'];
                                    }
                                     if($type=='news')
                                        { ?>
                                            <h5 class="breadcrumbs-title"><?php echo 'List of News'; ?></h5>
                                            <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                     <?php   }

                                        elseif($type=='event')
                                            { ?>
                                                <h5 class="breadcrumbs-title"><?php echo 'List of Event'; ?></h5>
                                                <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                         <?php   }
                                            else
                                                { ?>
                                                    <h5 class="breadcrumbs-title"><?php echo 'List of Gist'; ?></h5>
                                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                      
                                    </ol>
                                            <?php    }

                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption black-text">
                        <?php 
                            if($type=='news')
                                        { 
                                           // echo'List Of All News';
                                        } 
                                        elseif($type=='event')
                                            { 
                                                //echo'List Of All Events';
                                            } 
                                        else
                                            { //echo'List Of All Gist';
                                    } 


                                        ?> </p>
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered display" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th data-field="srno">Sr.No.</th>
                                                    <th data-field="id">Post Title</th>
                                                    <!--<th data-field="name">Post Category</th> -->
                                                    <th data-field="name">Author</th>
                                                    <th data-field="price">Posting Date</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php    if(isset($_GET['post_type'])){
                                             $post_type = $_GET['post_type'];
                                            }
                       // $query = $this->db->query("select * from tbl_posts where post_type = '" .$post_type. "'");
                        $serial_no = 1;
                                foreach ($posts_details as $row){ 
                                    $post_id = $row['post_id'];

                        ?>

                                                <tr><td><?php echo $serial_no++; ?></td>
                                                    <td><a href="#" title ="<?php echo $row['post_title'];?>" class="black-text"><?php $desc=$row['post_title']; $limitdesc = substr($desc,0,70);$etc = '...';echo $limitdesc."".$etc;?></td>
                                                   <!-- <td><?php //echo $row['post_category']; ?></td> -->
                                                    <td><?php echo $row['post_author']; ?></td>
                                                    <td><?php echo $row['post_date']; ?></td>
                                                    <td><?php if($_GET['post_type'] == 'news'){  ?>
                                                        <a href="<?php echo base_url() . 'index.php/admin/edit_news?id='.$post_id?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                        <?php if($row['post_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $post_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $post_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $post_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a>
                                                     <?php   } ?>
                                                     <?php if($_GET['post_type'] == 'event'){  ?>
                                                        <a href="<?php echo base_url() . 'index.php/admin/edit_event?id='.$post_id?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                         <?php if($row['post_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $post_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $post_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $post_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a>
                                                     <?php   } ?>
                                                     <?php if($_GET['post_type'] == 'gist'){  ?>
                                                        <a href="<?php echo base_url() . 'index.php/admin/edit_gist?id='.$post_id?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                         <?php if($row['post_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $post_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $post_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $post_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a>
                                                     <?php   } ?>
                                                        </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
       <?php  $this->load->view('admin/footer'); ?>
       <script>

            function deleted(id)
            {
                var deletepost_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deletepost_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }



                function cstatus(id){
                var statuspost_id = id;
            if (confirm('Sure to Approve ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {statuspost_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }

                function custatus(id){
                var ustatuspost_id = id;
            if (confirm('Sure to Unapprove ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {ustatuspost_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>