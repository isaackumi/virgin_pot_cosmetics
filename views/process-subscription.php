<?php
require_once '../init.php';

use App\User\User;
use App\User\Subscription;
use App\Session\Session;
use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;





if (isset($_POST['subscription'])) {

  // print_r($_POST);

  $subscription = array(
    "business_name"=>$_POST['business_name'],
    "business_email"=> $_POST['business_email'],
    "business_contact"=>$_POST['business_contact'],
    "business_location"=>$_POST['business_location'],
    "account_name"=>$_POST['account_name'],
    "account_number"=>$_POST['account_number'],
    "fee"=> (int) $_POST['fee']

  );


  Session::init();
  Session::put('subscription',$subscription);
  // $subscription_fee = Subscription::get('subscription')['business_name'];
  // var_dump($subscription_fee);
  // exit;

  Subscription::paystackInit();
}
