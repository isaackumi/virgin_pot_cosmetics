<?php
require_once '../init.php';

use App\User\Subscription;



// echo "verifying subscription.........";

(new Subscription())->paystackCallback();
