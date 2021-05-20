<?php
require_once 'init.php';

use App\User\User;
use App\User\Auth;
use App\User\Subscription;
use App\Session\Session;

use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;

//
// var_dump(Auth::id());
// exit;
if (isset($_GET['prod_id'])) {
  $prod_details = array(
    'price'=> (int) $_GET['price'],
    'prod_id'=>$_GET['prod_id']
  );
  Session::put('prod_details',$prod_details);
  var_dump(Session::get('prod_details')['price']);
  exit;
}

PaymentController::paystackInit() ? Auth::id() : Auth::gotoLogin();

// if (Auth::hasLogin())

  // PaymentController::paystackInit();
