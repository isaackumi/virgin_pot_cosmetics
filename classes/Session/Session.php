<?php


namespace App\Session;

class Session{

    public static function init(){


        if (session_status() == PHP_SESSION_NONE) {
          session_start();

    }
    }


    public static function set($key, $val){
        $_SESSION[$key] = $val;
    }


    public static function put(string $key, array $data){
        return $_SESSION[$key] = $data;

    }

    /**
     * get session value by applying session key
     *
     * @param [session key] $key
     * @return void
     */
    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        else{
            return false;
        }
    }

    /**
     * check if session is false and return to login page
     *
     * @return void
     */
    public static function checkSession(){
        self::init();
        if(self::get("adminlogin") == false){
            self::destroy();
            header("Location:login.php");
        }
    }


    /**
     * destroy session
     *
     * @return void
     */
    public static function destroy(){
        session_destroy();
        header("Location:login.php");
    }

//     public static function clear($key){
//
// if(self::get($key)){
//   self::init();
//   return unset(self::get($key));
// }
//
//     }

    public static function destroy1(){
        session_destroy();
        header("Location:pages/login.php");
    }

    public static function checklogin(){
        self::init();
        if(self::get("adminlogin") == true){
            header("Location:dashboard.php");
        }
    }


    public static function hasLogin(){

      $url = __DIR__.'Login/login.php';

        if(!self::get("user_id")){
            header("Location:../Login/login.php");
        }
    }
}




 ?>
