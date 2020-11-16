<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Auth;
use App\Session\Session;
Session::init();

 ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Fank</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-22F2GH01EB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-22F2GH01EB');
</script>



    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Food Store <em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="products.php" >Products</a></li>
                            <li><a href="checkout.html">Cart</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    <a class="dropdown-item" href="terms.html">Terms</a>
                                </div>
                            </li>

                            <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= Auth::hasLogin() ? "Welcome,  ".Auth::firstname() : "Hello, Guest" ?></a>

                                <div class="dropdown-menu">
                                  <?php
                                  if(Auth::hasLogin()){
                                    echo '  <a class="dropdown-item" href="./dashboard/examples/dashboard.php">Dashboard</a>';
                                    echo '  <a class="dropdown-item" href="#./dashboard/examples/dashboard.php">Profile</a>';
                                    echo '  <a class="dropdown-item" href="./Login/logout.php">Logout</a>';
                                  }else{
                                    echo '  <a class="dropdown-item" href="./Login/login.php">Login/Register</a>';
                                  }

                                   ?>
                                    <!-- <a class="dropdown-item" href="./dashboard/examples/dashboard.php">Log in</a> -->
                                    <!-- <a class="dropdown-item" href="#blog.html">Profile</a> -->
                                    <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a> -->
                                    <!-- <a class="dropdown-item" href="terms.html">Terms</a> -->
                                </div>
                            </li>
                            <li><a href="#" class="btn btn-primary" style="color:white;">Become a seller</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
