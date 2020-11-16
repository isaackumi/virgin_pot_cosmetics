<?php
namespace App\User;
use App\Connection\Connection as Connection;

class User extends Connection
{



	public function register_user($a, $b, $c,$d){
		//a query to get all login information base on email
		$sql = "INSERT INTO customer(customer_fname,customer_lname, customer_email, customer_pass) VALUES ('$a', '$b', '$c','$d')";
		//execute the query and return boolean

    if($this->hasEmail($c)){
      return false;
      exit;
    }
		return $this->db_query($sql);
	}


	public function login_user($a){
		//a query to get all login information base on email
		$sql = "SELECT * FROM customer WHERE customer_email='$a'";
		//execute the query and return boolean
		return $this->db_query($sql);
	}

	public function login_admin($a){
		//a query to get all login information base on email
		$sql = "SELECT * FROM admin WHERE admin_email='$a'";
		//execute the query and return boolean
		return $this->db_query($sql);
	}

  public function hasEmail($email){
    	$sql = "SELECT customer_email FROM customer WHERE customer_email='$email'";

      $res = $this->db_query($sql);

      return $this->db_count();

      // return $output =  $this->db_count() > 0 ? true: false;

  }


}



 ?>
