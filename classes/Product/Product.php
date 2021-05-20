<?php
namespace App\Product;
use App\Connection\Connection as Connection;


class Product extends Connection
{
  /**
*method to insert new product
*takes the title and price
*/
public function add_new_product($a, $b, $c,$d, $e){

  //Write the insert sql
  $sql = "INSERT INTO products (`product_title`,`product_price`,`product_desc`, `category`,`img1`) VALUES('$a', '$b','$c', '$d','$e')";
  //execute the sql and return boolean
  return $this->db_query($sql);
}

/**
*method to view all products
*/
public function view_products($category){
  //a query to get all products
  $sql = "SELECT * FROM products where category='$category'";

  //execute the query and return boolean
  return $this->db_query($sql);
}


public function recommended(){
  //a query to get all products
  $sql = "SELECT TOP 4 * FROM products";

  //execute the query and return boolean
  return $this->db_query($sql);
}

public function insert_image($a){

  //Write the insert sql
  $sql = "INSERT INTO images (`image`) VALUES('$a')";
  //execute the sql and return boolean
  return $this->db_query($sql);
}

public function view_all_images(){
  //a query to get all products
  $sql = "SELECT * FROM images";

  //execute the query and return boolean
  return $this->db_query($sql);
}


public function view_order_details($pid,$status){
  //a query to get all products
  $sql = "SELECT * FROM orders where customer_id='$pid' and order_status='$status'";

  //execute the query and return boolean
  return $this->db_query($sql);
}
public function view_all_products(){
  //a query to get all products
  $sql = "SELECT * FROM products";

  //execute the query and return boolean
  return $this->db_query($sql);
}
/**
*method to view one product base on id
*takes product id
*/
public function view_one_product($pa){
  //a query to get one product base on id
  $sql = "SELECT * FROM products WHERE product_id=$pa";

  //execute the query and return boolean
  return $this->db_query($sql);
}

/**
*method to search product
*takes the search term
*/
public function search_a_product($sterm){
  //a query to search product matching term
  $sql = "SELECT * FROM products WHERE product_title LIKE '%$sterm%' or product_price LIKE '%$sterm%' or category LIKE '%$sterm%'";

  //execute the query and return boolean
  return $this->db_query($sql);
}

/**
*method to update a product
*takes the id, title and price
*/
public function update_one_product($prod_title, $prod_price,$product_desc, $category,$prod_img,$prod_id){
  //a query to update a product
  $sql = "UPDATE products SET `product_title`='$prod_title', `category`='$category', `img1`='$prod_img', `product_price`='$prod_price',`product_desc`='$product_desc' WHERE product_id=$prod_id";

  //execute the query and return boolean
  return $this->db_query($sql);
}

/**
*method to delete a product using an id
*takes the id
*/
public function delete_one_product($a){
  //a query to delete product using an id
  $sql = "DELETE from products WHERE product_id=$a";

  //execute the query and return boolean
  return $this->db_query($sql);
}



////

public function add_to_cart($a,$c){


  $sql = "INSERT INTO cart (`product_id`,`qty`,`ip_add`) VALUES('$a', '1','$c')";

  //execute the sql and return boolean
  return $this->db_query($sql);
}


public function view_cart_item($a){
  //a query to get cart items
  $sql = "SELECT * FROM cart WHERE ip_add='$a'";
  //execute the query and return boolean
  return $this->db_query($sql);
}

function getCartItems($ip_address){
  $sql = "SELECT p.product_id, p.category,p.product_price, p.product_title, p.product_desc, p.img1,c.product_id, c.ip_add, c.qty FROM products AS p JOIN cart AS c ON p.product_id = c.product_id AND c.ip_add = '$ip_address'";
  return $this->db_query($sql);
}

public function qty($a){
  //a query to get cart items
  $sql = "SELECT qty FROM products WHERE product_id='$a'";
  //execute the query and return boolean
  return $this->db_query($sql);
}






/////

public function insert_order($customer_id,$random){
  // *generate a random number using rand() php function.
  // $random='FANK_'.rand();
  //get todays date(use the date('Y-m-d')
  // $date=date('Y-m-d');
  //set the order status to 'paid'
  $status="paid";
  $sql="INSERT into orders(`customer_id`, `invoice_no`,`order_status`) VALUES( '$customer_id','$random','$status')";
  return $this->db_query($sql);
}


public function just_ordered_id($invoice_no){
  $sql = "SELECT order_id FROM orders WHERE invoice_no = '$invoice_no'";
  return $this->db_query($sql);
}

function populate_order_details($order_id,$invoice_no,$ip){
  // $oder_id = $this->just_ordered_id($invoice_no);
  $sql = "INSERT INTO orderdetails (order_id,product_id,qty)
  SELECT '$order_id',product_id,qty FROM cart WHERE ip_add ='$ip'";
  return $this->db_query($sql);
}


/**
*method to insert new order detail
*takes order id, product id, customer id and quantity
*/

//add to order details table code goes here

public function insert_order_details($order_id, $product_id, $customer_id, $qty){

  $sql="INSERT into orderdetails(`order_id`,`product_id`,`cus_id`,`qty`) VALUES('$order_id', '$product_id', '$customer_id', '$qty')";
  return $this->db_query($sql);

}





/**
*method to insert new payment
*takes amount, customer id and order id
*/

//insert payment method goes here
public function insert_payment($amount, $customer_id, $invoice_no){
  // $date=date('Y-m-d');
  $sql="INSERT into payment(`amt`,	`customer_id`,`invoice_number`) VALUES( '$amount', '$customer_id',  '$invoice_no')";
  return $this->db_query($sql);

}


public function view_product_name($a){
  //a query to delete product using an id
  $sql = "SELECT product_title from products WHERE product_id='$a'";

  //execute the query and return boolean
  return $this->db_query($sql);
}

public function delete_all_cart_item($a){
  //a query to delete all cart item base on id
  $sql = "DELETE from cart WHERE ip_add='$a'";

  //execute the query and return boolean
  return $this->db_query($sql);
}

public function delete_cart_item($a, $b){
  //a query to delete a cart item base on both id
  $sql = "DELETE from cart WHERE product_id=$a AND customer_id='$b'";

  //execute the query and return boolean
  return $this->db_query($sql);
}
public function update_status($a,$b){
  //a query to delete all cart item base on id
  $sql = "UPDATE orders SET `order_status`='$a' where customer_id='$b'";

  //execute the query and return boolean
  return $this->db_query($sql);
}

public function create_category($category){
  //a query to delete all cart item base on id
  $sql = "INSERT INTO categories (cat_name) VALUES('$category')";

  //execute the query and return boolean
  return $this->db_query($sql);

}



public function view_all_categories(){
  //a query to delete all cart item base on id
  $sql = "SELECT * FROM categories";

  //execute the query and return boolean
  return $this->db_query($sql);
}



}



 ?>
