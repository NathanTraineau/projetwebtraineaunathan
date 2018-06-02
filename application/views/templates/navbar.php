
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<div class="alert alert-warning">
    <?=(isset($error))?$error:''?>
</div>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="site web d'organisation">
    <meta name="author" content="nathan Traineau">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url() ?>bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>bootstrap/css/sb-admin.css" rel="stylesheet">
</head>


<div class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">dashboard</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Create an Event">
                <a class="nav-link nav-link-collapse collapsed navbarResponsive" data-toggle="collapse" href="#collapseMulti" ">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Create an Event</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="<?php echo base_url() ?>event/formNewSportEvent">Create a Sport Training Event</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?php echo base_url() ?>contacts/showContacts">
                    <i class="fa fa-fw fa-hand-o-up"></i>
                    <span class="nav-link-text">Contacts</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url() ?>contacts/showAllUsers">
                    <i class="fa fa-fw fa-handshake-o"></i>
                    <span class="nav-link-text">Add New Contacts</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="<?php echo base_url() ?>sport/sportTrainings">
                    <i class="fa fa-fw fa-hand-rock-o"></i>
                    <span class="nav-link-text">Sport Trainings</span>
                </a>
            </li>



            <ul class="navbar-nav float-right ">

                <li class="nav-item float-right"  data-toggle="tooltip" data-placement="right" title="profil">
                    <a class="nav-link " href="<?php echo base_url() ?>user/showMyProfil">
                        <i class="fa fa-fw fa-table  "></i>
                        <span class="nav-link-text">My Profil</span>
                    </a>
                </li>



                <li class="nav-item float-right">
                    <a class="nav-link" data-toggle="modal" >
                        <a class="sign-out btn btn-primary btn-success btn-block float-right" href="<?php echo site_url("user/deconnexion")?>">Logout</a>
                    </a>
                </li>
            </ul>


        </div>
    </nav>
</div>