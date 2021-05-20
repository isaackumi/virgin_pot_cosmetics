<?php
require_once '../init.php';
require_once __DIR__.'/../../controllers/ProductController/CartController.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Auth;
use App\Session\Session;
Session::init();
$x=getTotalItemsInCart();
$cart_amount = getTotalItemAmountInCart();

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
    <script type="text/javascript" src="js/jquery.ajax-cross-origin.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

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
                        <a href="index.html" class="logo">FANK <em> STORE</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="products.php" >Products</a></li>
                            <li><a href="cart.php">Cart [<?= $x; ?> Item(s)]</a></li>
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
                                    echo '  <a class="dropdown-item" href="">Logout</a>';
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
                            <li><a href="subscription.php" class="btn btn-primary" style="color:white;">Become a seller</a></li>
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
