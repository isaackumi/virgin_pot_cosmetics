
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          FANK STORE
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="modal" data-target="#addProductModal">
              <i class="material-icons">content_paste</i>
              <p>Add Product</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="modal" data-target="#addCategoryModal">
              <i class="material-icons">library_books</i>
              <p>Add Category</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link"  data-toggle="modal" data-target="#addBrandModal">
              <i class="material-icons">bubble_chart</i>
              <p>Add Brands</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      



          <!-- ADD CATEGORY MODAL -->
                    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="error_message" style="color: firebrick;"></div>
                                    <form method="POST" action="../../product_proc.php" id="addBrandForm" onsubmit="return validateAddNewCategory();">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Category Name:</label>
                                            <input type="text" class="form-control" id="category_name" name="cat_name" required>
                                        </div>
                                        <div id="error_message" style="color: firebrick;"></div>
          <!--                              <div class="form-group">-->
          <!--                                  <label for="message-text" class="col-form-label">Message:</label>-->
          <!--                                  <textarea class="form-control" id="message-text"></textarea>-->
          <!--                              </div>-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit"  name="add_category" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
          <!--   ADD CATEGORY MODAL - END       -->




          <!--         ADD BRAND MODAL  -->
                    <div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form method="POST" action="../../product_proc.php" id="addBrandForm" onsubmit="return validateAddNewBrand();">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Brand Name:</label>
                                            <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                                            <input type="hidden" class="form-control" id="brand_id" value="<?=isset($bid)?($bid):'' ?>" name="brand_id" required>
                                        </div>
                                        <div id="brand_error_message" style="color: firebrick;"></div>
                                        <!--                              <div class="form-group">-->
                                        <!--                                  <label for="message-text" class="col-form-label">Message:</label>-->
                                        <!--                                  <textarea class="form-control" id="message-text"></textarea>-->
                                        <!--                              </div>-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit"  name="<?=isset($upname)? 'update_brand':'add_brand' ?>" value = "<?=isset($upname)?'Update Brand':'Add New Brand' ?>" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
          <!--  ADD BRAND MODAL  END -->




          <!--          ADD PRODUCT MODAL-->
                    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="UploadForm" action="../../product_proc.php" enctype="multipart/form-data" onsubmit="return validateUpload()">


                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                                                </div>
                                                <select id="brand_id" class="form-control" name="prod_brand" required>
                                                    <option  value="" disabled selected> -- select brand -- </option>
                                                <?php


                                                if ($all_brand){
                                                    foreach ($all_brand as $value){
                                                        $brand_name = $value['brand_name'];
                                                        $brand_id = $value['brand_id'];

                                                        echo "<option value='$brand_id'>$brand_name</option>";
                                                    }

                                                }
                                                ?>
                                                </select >
                                                <small style="color:red;" id="category_error"></small>

          <!--                                      <input id="name" type="text" placeholder="Name" class="form-control " name="name"   autocomplete="name" autofocus>-->
                                                <select id="category_id" class="form-control pull-right" name="prod_category"  required>
                                                    <option value="" disabled selected> -- select category -- </option>
                                                    <?php

                                                    if ($all_cat){
                                                        foreach ($all_cat as $value){
                                                            $cat_name = $value['cat_name'];
                                                            $cat_id = $value['cat_id'];

                                                            echo "<option value='$cat_id' >$cat_name</option>";
                                                        }

                                                    }
                                                    ?>

                                                </select>
                                            </div>


                                            <small style="color:red;" id="category_error"></small>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                                </div>
                                                <input  type="text" placeholder="Product title" class="form-control " name="prod_title" id="prod_title" value=""  autocomplete="title" autofocus required>
                                            </div>


                                            <small style="color:red;" id="title_error"></small>

                                        </div>
                                        <div class="form-group">
                                            <small class="mb-2">Price: </small>
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-active-40"></i></span>
                                                </div>
                                                <input  type="number" placeholder="Product price" value="" class="form-control "  id="prod_price" name="prod_price" value="" autocomplete="price" required>

                                            </div>


                                            <small style="color:red;" id="price_error"></small>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                                </div>
                                                <textarea   cols="3" rows="3" id="prod_desc" name="prod_desc" class="form-control"  placeholder="Product description" required></textarea>


                                            </div>


                                            <small style="color:red;" id="description_error"></small>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-image"></i></span>
                                                </div>
                                                <input type="file" class="form-control" id="prod_img" name="prod_img" accept="image/x-png,image/gif,image/jpeg" placeholder="Select product image" required>



                                            </div>

                                            <small style="color:red;" id="image_error" ></small>
                                        </div>

                                        <div class="form-group">

          <!--                                  <div class="input-group input-group-merge input-group-alternative mb-3">-->
          <!--                                      <div class="input-group-prepend">-->
          <!--                                          <span class="input-group-text"><i class="ni ni-active-40"></i></span>-->
          <!--                                      </div>-->
          <!--                                      <input  type="hidden" class="form-control" name="status" value="1">-->
          <!---->
          <!--                                  </div>-->

                                        </div>


                                        <input type="submit" name="add_product" class="btn btn-primary" value="Add Product">


                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--          ADD PRODUCT MODAL END -->
