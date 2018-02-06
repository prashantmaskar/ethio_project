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
                                    <h5 class="breadcrumbs-title">List User</h5>
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
                                                    <th data-field="id">User Name</th>
                                                    <th data-field="name">First Name</th>
                                                    <th data-field="price">Last Name</th>
                                                    <th data-field="price">Email Id</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $serial_no =1;
                                           foreach ($user as $row){
                                             $user_id = $row['user_id'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $serial_no++ ?></td>
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo $row['first_name']; ?></td>
                                                    <td><?php echo $row['last_name']; ?></td>
                                                     <td><?php echo $row['user_email']; ?></td>
                                                    <td>
                                                       
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $user_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>
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
                var deleteuser_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deleteuser_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
 </script>