<?php
require_once 'init.php';
require_once __DIR__.'/controllers/ProductController/CartController.php';
session_start();
use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Auth;
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
                         <a href="index.html" class="logo">FANK <em>Store </em></a>
                         <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                         <ul class="nav">
                             <li><a href="#index.php">Home</a></li>
                             <li><a href="./views/products.php" >Products</a></li>
                             <li><a href="./views/cart.php">Cart [<?= $x; ?> Items]</a></li>
                             <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>

                                 <div class="dropdown-menu">
                                     <a class="dropdown-item" href="#./views/about.php">About Us</a>
                                     <a class="dropdown-item" href="#./views/blog.php">Blog</a>
                                     <a class="dropdown-item" href="#./views/testimonials.php">Testimonials</a>
                                     <a class="dropdown-item" href="#./views/terms.php">Terms</a>
                                 </div>
                             </li>

                             <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= Auth::hasLogin() ? "Welcome,  ".Auth::firstName() : "Hello,  Guest" ?></a>

                                 <div class="dropdown-menu">
                                   <?php
                                   // $i = Auth::logout();
                                   if(Auth::hasLogin()){
                                     echo '  <a class="dropdown-item" href="./views/dashboard/examples/dashboard.php">Dashboard</a>';
                                     echo '  <a class="dropdown-item" href="#./dashboard/examples/dashboard.php">Profile</a>';
                                     echo '  <a class="dropdown-item" href="./views/Login/logout.php">Logout</a>';
                                   }else{
                                     echo '  <a class="dropdown-item" href="./views/Login/login.php">Login/Register</a>';

                                   }

                                    ?>
                                 </div>
                             </li>
                             <li><a href="./views/subscription.php" class="btn btn-primary" style="color:white;">Become a seller</a></li>
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <!-- <h6>Lorem ipsum dolor sit amet</h6> -->
                <h2>Best <em>store</em> in town</h2>
                <div class="main-button">
                    <a href="contact.html">Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Products</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">

              <?php
              $home = new ProductController();
              $home->landingPage();
               ?>

            </div>

            <br>

            <div class="main-button text-center">
                <a href="./views/products.php">View more products</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                  <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a></li>
                  <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</a></li>
                  <div class="main-rounded-button"><a href="blog.html">Read More</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>

                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="blog-details.html">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                    <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="blog-details.html">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                    <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="blog-details.html">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo necessitatibus?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="testimonials.html">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->



    <!-- Modals -->

    <!--          ADD PRODUCT MODAL-->
              <div class="modal fade" id="MembershipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?= Auth::firstName()?>'s Membership Form</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <p>This is a membership form. Please tell is more about your business. Kindly note the account number is what your sales will be paid into.</p>
                <form method="post" id="UploadForm" action="./views/process.php">







        <div class="form-group">
         <label for="recipient-name" class="col-form-label">Business Name:</label>
         <input type="text" class="form-control" id="recipient-name">
       </div>
       <div class="form-group">
        <label for="recipient-name" class="col-form-label">Business Email:</label>
        <input type="text" class="form-control" id="recipient-name" value="<?= Auth::email(); ?>">
      </div>
      <div class="form-group">
       <label for="recipient-name" class="col-form-label">Contact:</label>
       <input type="text" class="form-control" id="recipient-name">
     </div>
     <div class="form-group">
      <label for="recipient-name" class="col-form-label">Location:</label>
      <input type="text" class="form-control" id="recipient-name">
      <input type="hidden" class="form-control" id="recipient-name" value="<?= Auth::id()?>">
    </div>
    <div class="form-group">
     <label for="recipient-name" class="col-form-label">Account Name/Network:</label>
     <input type="text" class="form-control" id="recipient-name" placeholder="eg: Ecobank, GCB, MTN, Vodafone">
   </div>
   <div class="form-group">
    <label for="recipient-name" class="col-form-label">Account Number/MoMo Number:</label>
    <input type="text" class="form-control" id="recipient-name">
  </div>
  <div class="form-group">
   <label for="recipient-name" class="col-form-label">Membership Fee:</label>
   <input type="text" class="form-control" id="recipient-name" value='100'>
 </div>
       <!-- <div class="form-group">
         <label for="message-text" class="col-form-label">Message:</label>
         <textarea class="form-control" id="message-text"></textarea>
       </div> -->


                <input type="submit" name="subscription" class="btn btn-primary" value="Add Product">


                              </form>

                          </div>

                      </div>
                  </div>
              </div>

     <!-- Modal End -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

      <script src="./views/assets/js/view.ajax-services.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-22F2GH01EB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-22F2GH01EB');
</script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f967fcc2915ea4ba096a9c8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

  </body>
</html>
