<?php
require_once '../init.php';

use App\User\User;
use App\User\Subscription;
use App\Session\Session;
use App\User\Auth;
use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;

Session::init();





if (isset($_POST['order'])) {


$amount = Auth::postVal('amount');
$email = Auth::email();
$customer_id = Auth::id();
$address = Auth::postVal('address');
$qty = Auth::postVal('qty');
$pid = Auth::postVal('prod_id');
$contact = Auth::postVal('contact');
$city = Auth::postVal('city');
$invoice='FANK_'.rand();


$order = array(

  "invoice_no"=>$invoice,
  "prod_amount"=>Auth::postVal('amount'),
  "prod_id"=>$pid


);

Session::init();
Session::put('order_info',$order);



// Session::set('prod_amount',Auth::postVal('amount'));

// $insert_order = (new ProductController())->insert_order_fxn($customer_id,$invoice);

// var_dump($insert_order);
// exit;

// if ($insert_order) {
  // code...
  PaymentController::paystackInit();
// }





  // Session::init();
  // Session::put('subscription',$subscription);
  // $subscription_fee = Subscription::get('subscription')['business_name'];
  // var_dump($subscription_fee);
  // exit;


}
