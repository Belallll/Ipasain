<?php
require 'session.php';
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Codes
  </title>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script data-require="jquery@2.1.3" data-semver="2.1.3" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        toastr.options.progressBar = true;
        </script>
        <script src="assets/js/sweet.js"></script>



  <style>
    @import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap');


    *,html,body{
      font-family: 'El Messiri', sans-serif;
      font-size: 14px;
    }
    a,p,h1,h2,h4,h3,h5,span,textarea,input,form,card,card-title{
      font-family: 'El Messiri', sans-serif;

    }
    </style> 
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper bg-dark">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            AD
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Admin Dashboard
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="index">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>الرئيسية</p>
            </a>
          </li>
          <li>
            <a href="codes">
              <i class="tim-icons icon-notes"></i>
              <p>جميع الاكواد</p>
            </a>
          </li>
          <li>
            <a href="add-code">
              <i class="tim-icons icon-basket-simple"></i>
              <p>توليد الاكواد</p>
            </a>
          </li>
          <li>
            <a href="exp-code">
              <i class="tim-icons icon-simple-remove"></i>
              <p> الاكواد المنتهية </p>
            </a>
          </li>
          <li>
            <a href="texta.php" target="_blank">
              <i class="tim-icons icon-simple-remove"></i>
              <p> اضافه نص</p>
            </a>
          </li>
        </ul>
      </div>
    </div>