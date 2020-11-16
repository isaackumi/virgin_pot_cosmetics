<?php namespace Controllers\UserController;
require_once  __DIR__.'/../../init.php'; ?>

<?php
//connect to the login class
// require("../classes/loginclass.php");
use App\User\User;

//function to get login information - takes email

class UserController
{
	function login_user($email){
		$login_array = array();
		$login_object = new User();
		$login_record = $login_object->login_user($email);
		if ($login_record) {
			$one_record = $login_object->db_fetch();
			$login_array[] = $one_record;
		}
		return $login_array;
	}



	function login_admin($email){
		$login_array = array();
		$login_object = new User();
		$login_record = $login_object->login_admin($email);
		if ($login_record) {
			$one_record = $login_object->db_fetch();
			$login_array[] = $one_record;
		}
		return $login_array;
	}

	function register_user($a,$b,$c,$d){
		$new_object = new User();
		//run the add product method
		$insertlearner = $new_object->register_user($a,$b,$c, $d);
		//check if method worked
		if ($insertlearner) {
			//return query result (boolean)
			return $insertlearner;
		}else{

			return false;
		}
	}
}


?>
