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
                                    <h5 class="breadcrumbs-title">List Tender</h5>
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
                     
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered display" id="table_id">
                                            <thead>
                                                <tr> 
                                                    <th data-field="srno">Sr.No.</th>
                                                    <th data-field="id">Vacancy Caption</th>
                                                    <th data-field="name">College Name</th>
                                                    <th data-field="price">No.Vacancy</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $serial_no =1;
                                           foreach ($tender as $row){ ?>
                                           <?php $vac_id = $row['vacancy_id']; ?>
                                                <tr><td> <?php echo $serial_no++?></td>
                                                    <td><a href="#" title="<?php echo $row['vacancy_name']; ?>" class="black-text"><?php $desc=$row['vacancy_name']; $limitdesc=substr($desc, 0,50);$etc="...."; echo $limitdesc."".$etc; ?></a></td>
                                                    <td><?php echo $row['vacancy_school_name']; ?></td>
                                                    <td><?php echo $row['vacancy_count']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/admin/Edit_tender?id='.$vac_id ?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                        <?php if($row['vacancy_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $vac_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $vac_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $vac_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>
                                                        
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
                var delete_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {delete_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }



                function cstatus(id){
                var status_id = id;
            if (confirm('Sure to Approve ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {status_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }

                function custatus(id){
                var ustatus_id = id;
            if (confirm('Sure to Unapprove ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {ustatus_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>