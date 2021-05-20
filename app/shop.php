
<?php
require_once __DIR__.'/../init.php';
// require_once __DIR__.'/controllers/ProductController/CartController.php';
session_start();
use App\User\User;
use Controllers\ProductController\ProductController;

$home = new ProductController();


 ?>


<?php include_once './includes/header.php'; ?>


    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h2>Shop</h2> -->
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <h2>Shop </h2>

                                </div>
                                <!-- <p>Showing all 4 results</p> -->
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                      <?php

                                      $home->gridView();
                                       ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                  <?php

                                  $home->listView();
                                   ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left"> -->

            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->

    <!-- End Instagram Feed  -->
<?php include_once './includes/footer.php'; ?>
