<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Testprep</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/tabs.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <!-- <a href="#"><em>Test</em>Prep</a> -->
      <a href="#"><em>Test</em>Prep</a>
    </div>  
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <?php
          $Home = '';
          $Exam = '';
          $About_Us = '';
          $Courses = '';
          $Contact = '';
          $Accounts = '';
          $login = '';
          $upload = '';

          $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
          if ($curPageName == 'index.php') {
              $Home = 'active';
          }
          if ($curPageName == 'exam.php') {
              $Exam = 'active';
          }
          if ($curPageName == 'index.php') {
              $About_Us = 'active';
          }
          if ($curPageName == 'index.php') {
              $Courses = 'active';
          }
          if ($curPageName == 'index.php') {
              $Contact = 'active';
          }
          if ($curPageName == '#') {
              $Accounts = 'active';
          }

        ?>      
      <ul class="main-menu">
        <li class="<?php echo $Home?>"><a href="index.php">Home</a></li>
        <li class="<?php echo $Exam?>"><a href="exam.php">Exam</a></li>
        <li class="<?php echo $About_Us?>"><a href="index.php">About Us</a></li>
        <li class="<?php echo $Courses?>"><a href="index.php">Courses</a></li>
        <li class="<?php echo $Contact?>"><a href="index.php">Contact</a></li>
        <li class="has-submenu <?php echo $Accounts?>"><a href="#">Accounts</a>
          <ul class="sub-menu">
            <li><a href="#">Login</a></li>
            <li><a href="#">Registration</a></li>
          </ul>
        </li>
<!--         <li class="has-submenu"><a href="#section5">Video</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
          </ul>
        </li> -->
        <li><a href="#" class="external">Free Content</a></li>
      </ul>
    </nav>
  </header>