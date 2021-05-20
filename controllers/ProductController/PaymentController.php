<?php namespace Controllers\ProductController;
require_once  __DIR__.'/../../init.php'; ?>

<?php
use App\User\User;
use App\User\Auth;
use App\Session\Session;
use App\User\Subscription;
use Controllers\ProductController\ProductController;
Session::init();

class PaymentController
{
    // public static function init(){
    //   die('payment......');
    // }

    public static function init(){


        //API URL
            $curl = curl_init();
            // $total_amount = Subscription::get('subscription')['fee']  ?? 0.10;
            $total_amount =  0.10;

            $customer_email =  Auth::email() ?? "isaac.kumi@ashesi.edu.gh";
            $amount = $total_amount;
            $currency = "GHS";
            $txref = time().rand(10*45, 100*98); // ensure you generate unique references per transaction.
            $PBFPubKey = "FLWPUBK-c33638be362c6885edea349029866faf-X";
            // $redirect_url = self::verify(); // get your public key from the dashboard.
            $redirect_url = "http://13.68.189.1/sites/Fank_final/status.php";

            // var_dump(Subscription::get('subscription')['contact']);

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'amount'=>$amount,
                'customer_email'=>$customer_email,
                'currency'=>$currency,
                'txref'=>$txref,
                'PBFPubKey'=>$PBFPubKey,
                'redirect_url'=>$redirect_url,

            ]),
            CURLOPT_HTTPHEADER => [
                "content-type: application/json",
                "cache-control: no-cache"
            ],
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            if($err){
            // there was an error contacting the rave API
            die('Curl returned error: ' . $err);
            }

            $transaction = json_decode($response);

            if(!$transaction->data && !$transaction->data->link){
            // there was an error from the API
            print_r('API returned error: ' . $transaction->message);
            }

            // uncomment out this line if you want to redirect the user to the payment page
            //print_r($transaction->data->message);
            // redirect to page so User can pay
            // uncomment this line to allow the user redirect to the payment page
            header('Location: ' . $transaction->data->link);
    }




    public static function verify(){
      if (isset($_GET['txref'])) {
       $ref = $_GET['txref'];
       // $amount =Subscription::get('subscription')['fee'] ?? 0.10;
       $total_amount = 0.10;
       //Get the correct amount of your product
       $currency = "GHS"; //Correct Currency from Server

       $query = array(
           "SECKEY" => "FLWSECK-9e5dbdbfe1d1922994995e592362d558-X",
           "txref" => $ref
       );

       $data_string = json_encode($query);

       $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

       $response = curl_exec($ch);

       $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
       $header = substr($response, 0, $header_size);
       $body = substr($response, $header_size);

       curl_close($ch);

       $resp = json_decode($response, true);

       $paymentStatus = $resp['data']['status'];
       $chargeResponsecode = $resp['data']['chargecode'];
       $chargeAmount = $resp['data']['amount'];
       $chargeCurrency = $resp['data']['currency'];

       if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
         // transaction was successful...
       // please check other things like whether you already gave value for this ref
         // if the email matches the customer who owns the product etc
         //Give Value and return to Success page
         //   var_dump($resp);
         // header('Location: success.html');

         die('success');
       } else {
         //Dont Give Value and return to Failure page
         // var_dump($resp);
         // header('Location: error.html');

         die('error');

         // // TODO: get data from subscription-session and call create() in subscription then redirect to home page with message
       }
   }
   else {
     die('No reference supplied');
   }
    }



    public static function paystackInit(){

      $curl = curl_init();
      $price = Session::get('order_info')['prod_amount'];

      // var_dump($price);
      // exit;

      $email = Auth::email() ?? "isaac.kumi@ashesi.edu.gh";
      $amount = $price.'00';  //the amount in kobo. This value is actually NGN 300

      // url to go to after payment
      $callback_url = 'http://13.68.189.1/sites/Fank_final/views/verify-purchase.php';

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
          "authorization: Bearer sk_live_5efa292c6144a6403a29d8d9b823bbadcd5ecada", // sk_live_5efa292c6144a6403a29d8d9b823bbadcd5ecada replace this with your own test key
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



    public static function paystackCallback(){

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



        // TODO:

        // Get product details from session session::get(product_details)

        $invoice_no = Session::get('order_info')['invoice_no'];
        $customer_id = Auth::id();
        $insert_order = (new ProductController())->insert_order_fxn($customer_id,$invoice_no);

        // Get just inserted order ID

        $just_in  = (new ProductController())->just_ordered_id($invoice_no);
        // var_dump($invoice_no);
        $just_in_id = (int) $just_in[0]['order_id'];

        // exit;
        $amount = Session::get('order_info')['prod_amount'];




        // Insert payment into database
        $insert_pay = (new ProductController())->insert_payment_fxn($amount, $customer_id, $invoice_no);
          // Get Client Ip address
        $ip = Auth::ip();


          // populate order details table
        $pop = (new ProductController())->populate_order_details($just_in_id,$invoice_no,$ip);
  // clear cart items for current user
        $clear_cart = (new ProductController())->delete_all_cart_fxn($ip);

        // var_dump($pop);
        //
        // exit;



        // $insert_order = (new ProductController())->insert_order_fxn($customer_id,$invoice_no);
        //
        // var_dump($insert_pay);
        //
        // exit;
        // remove item from cart and redirect to cart




        // selct all from cart and get values
        if($insert_pay && $insert_order && $pop && $clear_cart){

          // $prod_id = Session::get('order_info')['prod_id'];



          header("Location: http://13.68.189.1/sites/Fank_final/views/cart.php");
            // header()
        }
        // Get Auth user details
        // Populate pament database table

        // Finally redirect to a page with a success message.



        // header("Location: ");
        echo "<h2>Thank you for making a purchase. Your file has been sent your email.</h2>";
      }

    }


}
