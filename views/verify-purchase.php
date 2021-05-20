<?php
require_once '../init.php';

use App\User\Subscription;
use Controllers\ProductController\PaymentController;





PaymentController::paystackCallback();
