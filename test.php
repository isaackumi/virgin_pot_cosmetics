<?php
require_once 'init.php';

use App\User\User;
use App\User\Auth;
use App\User\Subscription;
use App\Session\Session;

use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;


$user = new User();
$sub = new Subscription();


PaymentController::init();
  // $server = $_SERVER['SERVER_NAME'];
  // print_r($server);

  // $server = $_SERVER['HTTP_HOST'];
  // print_r($server);
// print_r($user->hasEmail('nk@gmail.com'));

// print_r(Auth::test()->name('name'));
// Route::get('/api','HomeControlelr')->name('home');
// print_r(Auth::email());
// print_r(Auth::firstName());
// print_r(Auth::lastName());

// $product = new ProductController();

// print_r(ProductController::view_all_products());

// echo $user->test();

// print_r($sub->test());
// print_r($sub->hasSubscription());





 ?>
