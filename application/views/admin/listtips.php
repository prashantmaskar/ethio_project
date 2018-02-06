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
                                    <h5 class="breadcrumbs-title">List Tips</h5>
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
                                                    <th data-field="id">Tips Name</th>
                                                    <th data-field="name">Date</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                             $serial_no = 1;
                                            foreach ($tips as $row){  

                                                   $post_id=$row['post_id'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $serial_no++?></td>
                                                    <td><a href="#" title="<?php echo $row['post_title']; ?>" class="black-text"><?php $desc=$row['post_title']; $limitdesc=substr($desc, 0,70);$etc="....";echo $limitdesc."".$etc; ?></td>
                                                    <td><?php echo $row['post_date']; ?></td>
                                                    
                                                    <td>
                                                         <a href="<?php echo base_url() . 'index.php/admin/edit_tips?id='.$post_id?>" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a> 
                                                        
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $post_id;?>);" class="btn-floating red delete-btn" ><i class="small mdi-action-highlight-remove"></i></a>
                                                    </td>
                                                </tr>
                                                 <?php } ?>
                                             <!--   <tr>
                                                    <td>Mater Science</td>
                                                    <td>Science</td>
                                                    <td>5 Month</td>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                </tr> -->
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
                var deletetips_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deletetips_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }  

       </script>