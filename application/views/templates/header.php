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
    <title>PlanUrLife</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url() ?>bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>bootstrap/css/sb-admin.css" rel="stylesheet">
</head>
