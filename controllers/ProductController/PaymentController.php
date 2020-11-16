<?php namespace Controllers\ProductController;
require_once  __DIR__.'/../../init.php'; ?>

<?php
use App\User\User;
use App\User\Auth;
use App\Session\Session;
use App\User\Subscription;

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
            $redirect_url = "http://localhost/sites/Fank_final/status.php";

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


}
