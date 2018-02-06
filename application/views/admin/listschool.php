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
                                    <h5 class="breadcrumbs-title">List School</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <!-- <p class="caption black-text">List Of All Registered Schools.</p> -->
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered display" id="table_id">
                                            <thead>
                                                <tr>
                                                     <th data-field="srno">Sr.No.</th>
                                                    <th data-field="id">School Name</th>
                                                    <th data-field="name">Email Id</th>
                                                    <th data-field="price">Country</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $serial_no = 1;
                                           foreach ($school as $row){
                                             $school_id = $row['school_id'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $serial_no++?></td>
                                                    <td><a href="#" title="<?php echo $row['school_name']; ?>" class="black-text"><?php $desc=$row['school_name'];  $limitdesc = substr($desc,0,70);$etc = '...';echo $limitdesc."".$etc;?></a></td>
                                                    <td><?php echo $row['user_email']; ?></td>
                                                    <td><?php echo $row['school_country']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/admin/edit_school?id='.$school_id?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                       <?php if($row['school_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $school_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $school_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a href="javascript:void(0);" onclick="deleted(<?php echo $school_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>
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
                var deleteschool_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deleteschool_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }



                function cstatus(id){
                var statusschool_id = id;
            if (confirm('Sure to Approve ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {statusschool_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }

                function custatus(id){
                var ustatusschool_id = id;
            if (confirm('Sure to Unapprove ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {ustatusschool_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>