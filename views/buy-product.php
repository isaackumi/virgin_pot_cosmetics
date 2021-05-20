<?php
require_once '../init.php';

use App\User\User;
use App\User\Auth;
use App\User\Subscription;
use App\Session\Session;

use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;


// PaymentController::init();

PaymentController::paystackInit();



// if (isset($_GET['type'])) {
//
//   $type = $_GET['type'];
// switch ($type) {
//   case 'buy':
//   PaymentController::init();
//
//     break;
//
//   default:
//     // code...
//     break;
// }
// }
