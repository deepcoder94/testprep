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
      <!-- <a href="#"><em>Grad</em> School</a> -->
      <a href="#"><em>Test</em>Prep</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <!-- <li><a href="index.php" rel="sponsored" class="external">Home</a></li> -->
        <!-- <li><a href="index.php" rel="sponsored" class="external">Exam</a></li> -->
        <!-- <li><a href="index.php" rel="sponsored" class="external">About Us</a></li> -->
        <!-- <li><a href="index.php" rel="sponsored" class="external">Courses</a></li> -->
        <!-- <li><a href="#section5">Video</a></li> -->

        <?php if (isset($_SESSION['name'])) {?>
        <li class="has-submenu"><a href="#">Welcome <?php echo $_SESSION['name'];?></a>
          <ul class="sub-menu">
<!--             <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li> -->
            <li><a href="logout.php?lg=logout" rel="sponsored" class="external">LOG OUT</a></li>          
          </ul>
        </li>
          <?php
        }else{
          ?>
        <!-- <li class="has-submenu"><a href="#">Account</a> -->
          <!-- <ul class="sub-menu"> -->
<!--             <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li> -->
            <!-- <li><a href="login.php" rel="sponsored" class="external">LOG IN</a></li> -->
            <!-- <li><a href="registration.php" class="external">REGISTRATION</a></li>             -->
          <!-- </ul> -->
        <!-- </li> -->
          <?php
        }

        ?> 
        <li><a class="external" id="demo"></a></li>              
      </ul>
    </nav>
  </header>