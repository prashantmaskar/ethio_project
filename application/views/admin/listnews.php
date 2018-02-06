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
                                    <h5 class="breadcrumbs-title">List News</h5>
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
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">News Title</th>
                                                    <th data-field="name">News Category</th>
                                                    <th data-field="name">Author</th>
                                                    <th data-field="price">Posting Date</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($news as $row){ ?>
                                                <tr>
                                                    <td><?php echo $row['post_title']; ?></td>
                                                    <td><?php echo $row['post_category']; ?></td>
                                                    <td><?php echo $row['post_author']; ?></td>
                                                    <td><?php echo $row['post_date']; ?></td>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
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