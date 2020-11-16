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
      $sql = "INSERT INTO subscription(business_name,user_id,business_email,contact,account_name,account_number,subscription_fee,business_location) VALUES('$business_name','$id','$business_email','$contact','$account_name','$account_number','$subscription_fee','$subscription_fee')";

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

}
