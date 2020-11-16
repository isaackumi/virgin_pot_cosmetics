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

      return parent::get('login')[0]['customer_fname'];


  }

  public static function email(){
    if (session_status() == PHP_SESSION_NONE) {

        parent::init();


      }

      return parent::get('login')[0]['customer_email'];

  }


public static function hasLogin():bool{
  if(parent::get('login')){
      return true;
      exit;
  }

  return false;
}


public static function logout(){

  if (session_status() == PHP_SESSION_NONE) {
    parent::init();

    }
  $server = $_SERVER['SERVER_NAME'];
  session_destroy();
  header("Location: http://localhost/sites/Fank_final/views/Login/login.php");
}

public static function test():void {
  die('test....');
}

public static function name(string $a){
  echo $a;
}


}
