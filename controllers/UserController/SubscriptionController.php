<?php namespace Controllers\ProductController;
require_once  __DIR__.'/../../init.php'; ?>

<?php
use App\User\Subscription;

class SubscriptionController
{
  public function create($business_name,$business_email,$contact,$account_name,$account_number,$subscription_fee,$business_location){

     $insert = (new Subscription())->create($business_name,$business_email,$contact,$account_name,$account_number,$subscription_fee,$business_location);

     return $insert = $insert ?: false;
  }

  public function hasSubscription(){

    $has = (new Subscription())->hasSubscription();

    return $has = $has ?: false;

  }
}
