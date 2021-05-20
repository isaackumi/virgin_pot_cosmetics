<?php

namespace App\User;
use App\Session\Session;


class Auth extends Session
{
  // Session::get('login')[0]['customer_fname']

  public static function id(){
    if (session_status() == PHP_SESSION_NONE) {
      parent::init();

}
if (!self::hasLogin()) {

  return false;
}

return parent::get('login')[0]['customer_id'];



  }

  public static function firstName(){

    if (session_status() == PHP_SESSION_NONE) {
      parent::init();

      }
      return parent::get('login')[0]['customer_fname'];

  }

  public static function lastName(){

    if (session_status() == PHP_SESSION_NONE) {

        parent::init();


      }

      return parent::get('login')[0]['customer_lname'];


  }

  public static function email(){
    if (session_status() == PHP_SESSION_NONE) {

        parent::init();


      }

      return parent::get('login')[0]['customer_email'];

  }


 public static function ip() {
     $ipaddress = '';
     if (isset($_SERVER['HTTP_CLIENT_IP']))
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_X_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if(isset($_SERVER['REMOTE_ADDR']))
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';
     return $ipaddress;
 }


public static function hasLogin():bool{
  if(parent::get('login')){
      return true;
      exit;
  }

  return false;
}

static function logoutAdmin(){

if (Auth::id()) {
  // code...
  Session::init();
  session_unset();
  session_destroy();
  header("Location: ../../Login/login.php");
}






}

public static function logout(){

  if (session_status() == PHP_SESSION_NONE) {
    parent::init();
    session_unset();
    session_destroy();
    header("Location: http://localhost/sites/Fank_final/views/Login/login.php");

    }


}

public static function gotoLogin(){
  if(!self::hasLogin()){
    header("Location: http://localhost/sites/Fank_final/views/Login/login.php");

    exit;
  }else{
    return true;

}
}



public static function getVal(string $val){

if (isset($_GET[$val])) {
  return $_GET[$val];
}

}

public static function postVal(string $val){

if (isset($_POST[$val])) {
  return $_POST[$val];
}
}


}
