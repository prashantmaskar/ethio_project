<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $m_title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo base_url().'/css/adminmaterialize.css' ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url().'/css/font-awesome.min.css' ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url().'/css/bootstrapValidator.css' ?>" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url().'/css/admin.css" type="text/css' ?>" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url().'/css/jquery.dataTables.css" type="text/css' ?>" rel="stylesheet" type="text/css" media="screen">
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />
       
    </head>
    <body>
        <header id="header" class="page-topbar ">
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">

                        <ul class="left">
                            <li>

                                <h1 class="logo-wrapper">
                                    <a href="<?php echo base_url(). 'index.php/home'?>" class="brand-logo darken-1" >
                                        EthioEdu
                                    </a>    
                                </h1>
                                <span class="logo-text">Ethioedu</span>
                            </li>
                            
                        </ul>
                        <ul class="right">
                            <li>
                             <a href="<?php echo base_url() . 'index.php/logout' ?>">LOGOUT</a>
                            </li>
                        </ul>
                       <!-- <ul class="right hid-mid-screen">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                    <i class="mdi-action-settings-overscan"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                    <i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                                    <i class="mdi-communication-chat"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>

                </nav>
            </div>

        </header>
        <!--header End-->