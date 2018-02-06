<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
               <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="../../images/avatar.jpg" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                        Fikreman
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <i class="mdi-action-face-unlock"></i>
                                                Profile
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
                        <li class="bold active">
                            <a href="#" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        School Manage
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
                                        Course Manage
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
                                        News Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addnews' ?>">Add News</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listnews' ?>">List News</a>
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
                                            <li><a href="#">Past Exam</a>
                                            </li>
                                            <li><a href="#">Tips</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/quesanswer' ?>">Questions & Answers</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Project_Topic' ?>">Project Topics</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Events' ?>">Add Events</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/ListEvent' ?>"> List Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>                   
                </aside>
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
                                    <h5 class="breadcrumbs-title">List Gist</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption black-text">List Of All Gist</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Gist Search</h4>
                                            <div class="row">
   
                                                <form id="Queans" class="col m12" action="<?php echo site_url('index.php/admin/Quesanswer')?>" method="post">


                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="radio" value="all" id="all" class="r1" name="school_type1"/>
                                            <label for="all">All</label>
                                        </p>
                                    </div>
                                                 <div class="input-field col s12 m2">
                                        <p>
                                            <input type="radio" id="today" value="today" class="r1" name="school_type1" />
                                            <label for="today">Today</label>
                                        </p>
                                    </div>

                                        
                                            <div class="hiddenfields" style="display: none" class="input-field col s12 m2">
                                            <input type="text" id="manual" value="" name="manual" />
                                            <label for="manual">Manual</label>
                                            </div>
                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="radio" value="tomorrow" id="tomorrow" class="r1" name="school_type1"/>
                                            <label for="tomorrow">Tomorrow</label>
                                        </p>
                                    </div>
                                     <div class="hiddenfields" style="display: none" class="input-field col s12 m2">
                                                        <select class="form-control browser-default" name="duration">
                                                            <option value="">select duration</option>
                                                             <option value="year">year</option>
                                                            <option value="Month">Month</option>
                                                            <option value="Day">Day</option>
                                                        </select>
                                            </div>
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Add</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Gist Title</th>
                                                    <th data-field="name">Gist Category</th>
                                                    <th data-field="price">Posting Date</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Gist Course Started </td>
                                                    <td>Course </td>
                                                    <td>5/sep/2016</td>
                                                    <?php 
                                                    $string = '';
                                                    foreach($gist as $row){ 

                                                    //$abc = $row['school_number'];
                                                         $string .= $row['school_number'].',';

                                                    ?>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                        <?php } ?>
                                                        <?php echo $string; ?>
                                                </tr>
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
       $(document).ready(function(){
    $(".r1").click(function(){
         $(this).siblings().find('.hiddenfields').slideUp();
    $(this).find('.hiddenfields').slideDown();
    });
});
</script>