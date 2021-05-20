<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\User\Auth;

// True ? Auth::id() : Auth::gotoLogin();



if (! Auth::id()) {
Auth::gotoLogin();
}

$amount = Auth::getVal('amount');
$price = Auth::getVal('price');
$qty = Auth::getVal('qty');
$prod_id = Auth::getVal('prod_id');



 ?>

<?php include_once './includes/header.inc.php'; ?>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> Checkout<em></em></h2>
                        <!-- <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="process-purchase.php" method="post">
                           <div class="row">
                                <!-- <div class="col-sm-6 col-xs-12">
                                     <label>Title:</label>
                                     <select data-msg-required="This field is required.">
                                          <option value="">-- Choose --</option>
                                          <option value="dr">Dr.</option>
                                          <option value="miss">Miss</option>
                                          <option value="mr">Mr.</option>
                                          <option value="mrs">Mrs.</option>
                                          <option value="ms">Ms.</option>
                                          <option value="other">Other</option>
                                          <option value="prof">Prof.</option>
                                          <option value="rev">Rev.</option>
                                     </select>
                                </div> -->
                                <!-- <div class="col-sm-6 col-xs-12">
                                     <label>Name:</label>
                                     <input type="text" value="">
                                </div> -->
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Email:</label>
                                     <input type="text" value="<?= Auth::id() ? Auth::email() : " " ?>" name="email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>Contact:</label>
                                     <input type="text" name="contact">
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Address:</label>
                                     <input type="text" name="address">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>City:</label>
                                     <input type="text" name="city">

                                     <input type="hidden" name="amount" value="<?= $amount ?>">
                                     <!-- <input type="hidden" name="price" value="<?= $price ?>"> -->
                                     <!-- <input type="hidden" name="qty" value="<?= $qty ?>"> -->
                                     <!-- <input type="hidden" name="prod_id" value="<?= $prod_id ?>"> -->



                                </div>
                           </div>
                           <!-- <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>City:</label>
                                     <input type="text">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>State:</label>
                                     <input type="text">
                                </div>
                           </div> -->
                           <!-- <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Zip:</label>
                                     <input type="text">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>Country:</label>
                                     <select>
                                          <option value="">-- Choose --</option>
                                          <option value="">-- Choose --</option>
                                          <option value="">-- Choose --</option>
                                          <option value="">-- Choose --</option>
                                     </select>
                                </div>
                           </div> -->

                           <div class="row">
                                <!-- <div class="col-sm-6 col-xs-12">
                                     <label>Payment method</label>

                                     <select>
                                          <option value="">-- Choose --</option>
                                          <option value="bank">Bank account</option>
                                          <option value="cash">Cash</option>
                                          <option value="paypal">PayPal</option>
                                     </select>
                                </div> -->

                                <!-- <div class="col-sm-6 col-xs-12">
                                     <label>Captcha</label>
                                     <input type="text">
                                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                            <button type="submit" name="order">Proceed to payment</submit>
                                        </div>

                                        <!-- <div class="float-right">
                                            <a href="#">Finish</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Sub-total</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">GH¢ <?= $amount ?></h5>
                            </div>
                         </div>
                      </li>

                      <!-- <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Extra</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">$ 0.00</h5>
                            </div>
                         </div>
                      </li> -->

                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Tax</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">GH¢ 0.00</h5>
                            </div>
                         </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <h4><strong>Total</strong></h4>
                            </div>

                            <div class="col-6">
                                <h4 class="text-right">GH¢ <?= $amount ?></h4>
                            </div>
                         </div>
                      </li>

                      <!-- <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Deposit</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">$ 10.00</h5>
                            </div>
                         </div>
                      </li> -->
                    </ul>

                    <br>
                </div>
            </div>
        </div>
    </section>

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

  </body>
</html>
