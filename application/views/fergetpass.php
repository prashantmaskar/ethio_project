<!DOCTYPE html>
<html lang="en">       

    <head>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />

    </head>
    <body class="red-gradient-bg">
        <div id="login-page" class="row">
            <div class="col s3 offset-s4 z-depth-2 card-panel">
            <?php echo $this->session->flashdata('msg'); ?>
                <form id="log" class="login-form" action="<?php echo site_url('index.php/login/sendfergetemail')?>" method="post">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h4>EthioEdu <?php echo $title;?></h4>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="form-group input-field col s12">
                            <input name="email" id="email" type="email">
                            <label for="email" class="center-align">Email Id</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                         <!--   <a href="index.html" class="btn waves-effect waves-light col s12">Login</a> -->
                            <button class="btn waves-effect waves-light col s12" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Send Reset Password link </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="../sregister">Register Now!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="../login">Back to login</a></p>
                        </div>          
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>



<!--<script type="text/javascript" src="<?php //echo base_url() . 'js/jquery-2.1.1.min.js' ?>"></script>-->
        <!--<script type="text/javascript" src="<?php //echo base_url() . 'js/materialize.min.js' ?>"></script>-->
       <!-- <script type="text/javascript" src="<?php //echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/jquery.validate.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/picker.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/script.js' ?>"></script> -->
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrapValidator.js' ?>"></script> 


    </body>
</html>


<script>
$(document).ready(function() {

    $('#log').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: ' please enter registered email!!!..'
                    }
                }
            }
           
           
        }
    });
});
</script>