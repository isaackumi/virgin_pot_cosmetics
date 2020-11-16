<?php
//for header redirection
ob_start();

//start session - needed to capture login information
// session_start();

//connnect to the controller


require_once '../../init.php';

use App\User\User;
use Controllers\UserController\UserController;
use App\Session\Session;
Session::init();

// require ('../settings/core.php');


if (isset($_POST['registerUser'])){
	//grab form details
	$lemail = $_POST['email'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$lpass = $_POST['password'];
	$hash = password_hash($lpass, PASSWORD_DEFAULT);
	//check if email exist
	$register = (new UserController())->register_user($firstname, $lastname, $lemail, $hash);
	if ($register) {
			//echo success
		header('Location: login.php');
	}else{
				//echo failure

		Session::set('register-error','email already exist!');
		header('Location: register.php');

			}

	}


//check if login button was clicked
if (isset($_POST['login_user'])){
	//grab form details
	$lemail = $_POST['email'];
	$lpass = $_POST['pass'];
	$check_login = (new UserController())->login_user($lemail);


	if (isset($check_login)) {

		$hash = $check_login[0]['customer_pass'];
		// var_dump($hash);
		// var_dump($lpass);
		// var_dump(password_verify($lpass, $hash));

		// print_r('pass');


		if (password_verify($lpass, $hash)){

				Session::put('login',$check_login);
				header('Location: ../../index.php');

				exit;
		}else{
			die('an error occured');
		}
	} else{
		//echo appropriate error
		echo "incorrect username or password";
	}
}

if (isset($_POST['login_admin'])){
	//grab form details
	$lemail = $_POST['email'];
	$lpass = $_POST['pass'];
	$check_login = User::login_admin($lemail);

	if ($check_login) {
		//email exist, continue to password
		//get password from database
		$hash = $check_login[0]['admin_pass'];

		if (password_verify($lpass, $hash))
		{
				//create session for id, role and name
				$_SESSION["user_id"] = $check_login[0]['admin_id'];
				$_SESSION["user_name"] = $check_login[0]['firstname'];

				//redirection to home page
				header('Location: ../admin/index.php');

				//to make sure the code below does not execute after redirection use exit
				exit;
		} else
		{
				//echo appropriate error

				header('Location: login.php');
		}

	} else{
		//echo appropriate error
		echo "incorrect username or password";
	}
}

?>
