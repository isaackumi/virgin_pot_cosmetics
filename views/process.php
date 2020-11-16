<?php
require_once '../init.php';

use App\User\User;
use App\User\Subscription;
use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;




if (isset($_POST['subscription'])) {

  // print_r($_POST);
  Subscription::put('subscription',$_POST);
  // $body = @file_get_contents("php://input");
  // var_dump($body[]);
  PaymentController::init();
}
