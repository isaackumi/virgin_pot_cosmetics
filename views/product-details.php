<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;

$id = isset($_GET['prod_id'])?$_GET['prod_id']:false;
$home = new ProductController();


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
                        <h2><sup>GH¢</sup><?= $home->viewOneProduct($id)[0]['product_price'];?>.00</h2>
                        <p><?= $home->viewOneProduct($id)[0]['product_desc'];?></p>
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
            <?php
            
            $home->displayOneProduct($id);
             ?>


        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->



    <?php include_once './includes/footer.inc.php'; ?>
