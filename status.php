<?php
require_once 'init.php';

use App\User\User;
use App\User\Auth;
use App\User\Subscription;

use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;



PaymentController::verify();
