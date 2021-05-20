<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Auth;

 ?>

<?php include_once './includes/header.inc.php'; ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Products</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->


        <section class="section" id="trainers">
          <div class="container">
      <br/>
  	<div class="row justify-content-center">
                          <div class="col-12 col-md-10 col-lg-8">
                              <form class="card card-sm" method="get" action="search-result.php">
                                  <div class="card-body row no-gutters align-items-center">
                                      <div class="col-auto">
                                          <i class="fas fa-search h4 text-body"></i>
                                      </div>
                                      <!--end of col-->
                                      <div class="col">
                                          <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search products by title, price and category" name="sterm">
                                      </div>
                                      <!--end of col-->
                                      <div class="col-auto">

                                          <button class="btn btn-lg btn-primary pull-right" type="submit" >Search</button>
                                      </div>
                                      <!--end of col-->
                                  </div>
                              </form>
                          </div>
                          <!--end of col-->
                      </div>
  </div>
        </section>

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">

            <div class="row">

              <?php
              $home = new ProductController();
              $home->displayHomeProd();
               ?>


            </div>

            <br>

            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    <?php include_once './includes/footer.inc.php'; ?>
