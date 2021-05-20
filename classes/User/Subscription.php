<?php
namespace App\User;
use App\Connection\Connection as Connection;
use App\User\Auth;
use App\Session\Session;

class Subscription extends Connection
{
    public function test(){
      die('subscribe');
    }

    public function create($business_name,$business_email,$contact,$account_name,$account_number,$subscription_fee,$business_location){
      $id = Auth::id();
      $sql = "INSERT INTO subscription(business_name,user_id,business_email,contact,account_name,account_number,subscription_fee,business_location) VALUES('$business_name','$id','$business_email','$contact','$account_name','$account_number','$subscription_fee','$business_location')";

      if($this->hasSubscription()){
        return false;
        exit;
      }

      return $this->db_query($sql);

    }

    public function hasSubscription(){

      $id = Auth::id();
      //a query to get all login information base on email
      $sql = "SELECT * FROM subscription WHERE user_id='$id'";


      $res = $this->db_query($sql);

      return $this->db_count();
    }


    public function getAllSubscription(){

      $sql = "SELECT * FROM subscription";
      return $this->db_query($sql);

    }

    public static function put( string $key,array $val){
      return Session::put($key,$val);
    }

    public static function get(string $key){
      return Session::get($key);
    }



    public function userWithSubscription(){

      if($this-> hasSubscription()){
        return true;
        exit;

      }

      header("Location: http://localhost/sites/Fank_final/index.php");


    }

    public function hasSubscribed(){

      if($this-> hasSubscription()){
          header("Location: http://localhost/sites/Fank_final/index.php");
        exit;

      }

      return false;

    }

    public static function paystackInit(){
      $curl = curl_init();
      // Session::init();
      $price = self::get('subscription')['fee'];

      // var_dump($price);
      // exit;

      $email = Auth::email() ?? "isaac.kumi@ashesi.edu.gh";
      $amount = $price.'00';  //the amount in pesewas. This value is actually GHS 300

      // url to go to after payment
      $callback_url = 'http://localhost/sites/Fank_final/views/verify-subscription.php';

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
          'amount'=>$amount,
          'email'=>$email,
          'callback_url' => $callback_url
        ]),
        CURLOPT_HTTPHEADER => [
          "authorization: Bearer sk_live_5efa292c6144a6403a29d8d9b823bbadcd5ecada", //replace this with your own test key
          "content-type: application/json",
          "cache-control: no-cache"
        ],
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      if($err){
        // there was an error contacting the Paystack API
        die('Curl returned error: ' . $err);
      }

      $tranx = json_decode($response, true);

      if(!$tranx['status']){
        // there was an error from the API
        print_r('API returned error: ' . $tranx['message']);
      }

      // comment out this line if you want to redirect the user to the payment page
      print_r($tranx);
      // redirect to page so User can pay
      // uncomment this line to allow the user redirect to the payment page
      header('Location: ' . $tranx['data']['authorization_url']);

    }



    public function paystackCallback(){

      $curl = curl_init();
      $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
      if(!$reference){
        die('No reference supplied');
      }

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
          "accept: application/json",
          "authorization: Bearer sk_live_5efa292c6144a6403a29d8d9b823bbadcd5ecada",
          "cache-control: no-cache"
        ],
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      if($err){
          // there was an error contacting the Paystack API
        die('Curl returned error: ' . $err);
      }

      $tranx = json_decode($response);

      if(!$tranx->status){
        // there was an error from the API
        die('API returned error: ' . $tranx->message);
      }

      if('success' == $tranx->data->status){
        // transaction was successful...
        // please check other things like whether you already gave value for this ref
        // if the email matches the customer who owns the product etc
        // Give value

        header("Location: http://localhost/sites/Fank_final/views/subscription-success.php");

        // TODO:


        // Get product details from session session::get(product_details)
        // Get Auth user details
        // Populate pament database table

        // Finally redirect to a page with a success message.



        // header("Location: ");

      }

    }


}
