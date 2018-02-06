<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
            <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div class="container">
                        <div id="card-stats">
                            <div class="row">
                                <?php
                                $sessid= $this->session->userdata('suserid');

                                ?>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content  green white-text">
                                            <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Users</p>
                                            <h4 class="card-stats-number"><?php echo $all_users; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                            </p>
                                        </div>
                                        <div class="card-action  green darken-2">
                                            <div id="clients-bar" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content pink lighten-1 white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total Events</p>
                                            <h4 class="card-stats-number"><?php echo $devent_count; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> <?php echo $daevent_count; ?> <span class="deep-purple-text text-lighten-5">Approved Events</span>
                                            </p>
                                        </div>
                                        <div class="card-action  pink darken-2">
                                            <div id="invoice-line" class="center-align"><canvas width="241" height="25" style="display: inline-block; width: 241px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content blue-grey white-text">
                                            <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Total Advertise</p>
                                            <h4 class="card-stats-number"><?php echo $all_advertise; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> <?php echo $approved_advertise; ?> <span class="blue-grey-text text-lighten-5">Active Advertise</span>
                                            </p>
                                        </div>
                                        <div class="card-action blue-grey darken-2">
                                            <div id="profit-tristate" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content purple white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Schools</p>
                                            <h4 class="card-stats-number"><?php echo $all_school; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> <?php echo $approved_school; ?> <span class="purple-text text-lighten-5">Approved Schools</span>
                                            </p>
                                        </div>
                                        <div class="card-action purple darken-2">
                                            <div id="sales-compositebar" class="center-align"><canvas width="214" height="25" style="display: inline-block; width: 214px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs/fusioncharts.js"></script>
       <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs/themes/fusioncharts.theme.ocean.js"></script>





                    </div>
                </section>
            </div>
        </div>
       <?php  $this->load->view('admin/footer'); ?>
       