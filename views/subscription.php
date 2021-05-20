<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Subscription;


use App\User\Auth;

(new Subscription())->hasSubscribed();





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
                        <h2><?= Auth::firstName() ?: ''; ?>'s Subscription form</h2>
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
      <form method="post" id="UploadForm" action="process-subscription.php">


    <div class="form-group">
     <label for="recipient-name" class="col-form-label">Business Name:</label>
     <input type="text" class="form-control" id="recipient-name" name="business_name"  required>
   </div>
   <div class="form-group">
    <label for="recipient-name" class="col-form-label">Business Email:</label>
    <input type="email" class="form-control" id="recipient-name" value="<?= Auth::email() ?: ''; ?>" name="business_email" required>
  </div>
  <div class="form-group">
   <label for="recipient-name" class="col-form-label">Contact:</label>
   <input type="tel" class="form-control" id="recipient-name" name="business_contact"  required>
 </div>
 <div class="form-group">
  <label for="recipient-name" class="col-form-label">Location:</label>
  <input type="text" class="form-control" id="recipient-name"  name="business_location" required>
  
</div>
<div class="form-group">
 <label for="recipient-name" class="col-form-label">Account Name/Network:</label>
 <input type="text" class="form-control" id="recipient-name" placeholder="eg: Ecobank, GCB, MTN, Vodafone" name="account_name"  required>
</div>
<div class="form-group">
<label for="recipient-name" class="col-form-label">Account Number/MoMo Number:</label>
<input type="number" class="form-control" id="recipient-name" name="account_number" required>
</div>
<div class="form-group">
<!-- <label for="recipient-name" class="col-form-label">Membership Fee:</label> -->
<input type="hidden" class="form-control" id="recipient-name" value='10' name="fee">
</div>
   <!-- <div class="form-group">
     <label for="message-text" class="col-form-label">Message:</label>
     <textarea class="form-control" id="message-text"></textarea>
   </div> -->


            <input type="submit" name="subscription" class="btn btn-primary" value="Proceed to Payment">


</form>



        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

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

  </body>
</html>
