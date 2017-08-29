<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <link rel="icon" href="assets/custom/img/SHC-Favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS -->
  <link href="assets/custom/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animation CSS -->
  <link href="assets/custom/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<?php if($title == "Patients") :?>
  <link href="assets/plugins/dataTables/datatables.min.css" rel="stylesheet">
<?php endif ?>
<?php if($title == "Appointments") :?>
  <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
  <link href="assets/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
<?php endif ?>
  <!-- Custom styles for this template -->
  <link href="assets/custom/css/style.css" rel="stylesheet">
<?php if($title == "Register") :?>
  <link href="assets/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="assets/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet">
  <link href="assets/plugins/clockpicker/clockpicker.css" rel="stylesheet">
  <!-- Sweet Alert -->
  <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<?php endif ?>
</head>
<?php if($title == "Home") :?>
  <body id="page-top" class="landing-page no-skin-config">
<?php endif ?>
<?php if($title != "Home") :?>
  <body class="">
<?php endif ?>