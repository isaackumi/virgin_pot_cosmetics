<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Subscription;

require_once "../controllers/ProductController/CartController.php";


use App\User\Auth;







// $id = isset($_GET['prod_id'])?$_GET['prod_id']:false;
// $home = new ProductController();


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
                        <p>Total Amount in Cart</p>
                        <h2>GH¢ <?= getTotalItemAmountInCart();?>.00</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="container">
              <div class="row">
                <div class="col-12">
            		<table class="table table-image">
            		  <thead>
            		    <tr>

            		      <th scope="col">Image</th>
            		      <th scope="col">Title</th>
            		      <th scope="col">Price</th>
            		      <th scope="col">Quantity</th>
                      <th scope="col">Amount</th>
            		      <th scope="col">Action</th>
            		    </tr>
            		  </thead>
            		  <tbody>

                    <?php cartDisplay(); ?>


            		  </tbody>
            		</table>
                <div class="main-button">

                  <?php
                  $amount = getTotalItemAmountInCart();
                
                   echo " <a  href='checkout.php?amount=$amount' class='btn btn-lg btn-info pull-right'>Proceed to Checkout</a> "; ?>

                    <a  href='products.php' class='btn btn-lg btn-success pull-left'>Continue Shopping</a>

                </div>


                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
<?php include_once './includes/footer.inc.php'; ?>
