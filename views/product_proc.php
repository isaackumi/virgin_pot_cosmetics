<?php
require_once '../init.php';

use App\User\User;
use Controllers\ProductController\ProductController;
use App\Session\Session;
use App\User\Auth;




/*
|--------------------------------------------------------------------------
| Product Processing
|--------------------------------------------------------------------------
|
| TThis file handles product upload from the admin
|
*/





if (isset($_POST['add_product'])){


function uploadImage(){
    //the directory/path of the image
    $folderName = "../assets/images/uploads/";
    //fileName: a variable with the folder name and the name of the image
    //fileToUpload: is the name of the input in the form
    //name: specifies the name of the file that is being uploaded
    //concatenate (join) the foldername and the file name
    $fileName1 = $folderName . basename($_FILES["prod_img"]["name"]);
    //set a variable 'uploadOk' and make it equal to 1.
    //this variable will be used later to know whether the file can be successfully uploaded or not
    $uploadOk = 1;
    //imageFileType: this varialbe stores the extension of the image used
    $imageFileType = strtolower(pathinfo($fileName1,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    //when the upload image button is submitted/clicked..
    if(isset($_POST["submit"]) || isset($_POST["continue"])) {
        //get the dimensions of the image and store it in the variable '$check'
        $fileDimensions = getimagesize($_FILES["prod_img"]["tmp_name"]);
        if($fileDimensions !== false) {
             echo "File is an image - " . $fileDimensions["mime"] . ".";
            // print_r($fileDimensions);
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($fileName1)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    //check if its greater than 500kb
    if ($_FILES["prod_img"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["prod_img"]["tmp_name"], $fileName1)) {
            echo "The file ". basename( $_FILES["prod_img"]["name"]). " has been uploaded.";
            //echo '<image src="../image/'.basename( $_FILES["fileToUpload"]["name"]).'">';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}





uploadImage();



		//check if submit button was clicked

	  $folderName = "./assets/images/uploads/";
    $fileName1 = $folderName.basename($_FILES["prod_img"]["name"]);


	$category_id = $_POST['prod_category'];
	// $brand_id = (int)$_POST['prod_brand'];
	$prod_title = $_POST['prod_title'];
    $prod_price = $_POST['prod_price'];
    $prod_desc = $_POST['prod_desc'];

    $insert_product= (new ProductController())->add_product($prod_title,$prod_price,$prod_desc,$category_id,$fileName1);
                                                                                                                                                                                                                   if($insert_product){
    $_SESSION['upload_success'] = "Product added successfully";
        // header('Location:index.php');

        header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit;
    }else{
		//echo failure
        $_SESSION['upload_error'] = "Error adding product";

        header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit;

		}
    }




    if (isset($_POST['add_category'])) {

      $category = $_POST['cat_name'];

    $hasInsert  = (new ProductController())->create_category($category);
      if ($hasInsert) {

        Session::set('cat-success','successful!');
        header("Location: ./dashboard/examples/dashboard.php");

      }
    }


    if (isset($_GET['deleteId'])) {

      $id  = $_GET['deleteId'];
      $is_deleted = (new ProductController())->delete_product_fxn($id);

      if ($is_deleted) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
      return false;
    }


    if (isset($_POST['update_product'])) {



      function uploadImage(){
          //the directory/path of the image
          $folderName = "../assets/images/uploads/";
          //fileName: a variable with the folder name and the name of the image
          //fileToUpload: is the name of the input in the form
          //name: specifies the name of the file that is being uploaded
          //concatenate (join) the foldername and the file name
          $fileName1 = $folderName . basename($_FILES["prod_img"]["name"]);
          //set a variable 'uploadOk' and make it equal to 1.
          //this variable will be used later to know whether the file can be successfully uploaded or not
          $uploadOk = 1;
          //imageFileType: this varialbe stores the extension of the image used
          $imageFileType = strtolower(pathinfo($fileName1,PATHINFO_EXTENSION));
          // Check if image file is a actual image or fake image
          //when the upload image button is submitted/clicked..
          if(isset($_POST["submit"]) || isset($_POST["continue"])) {
              //get the dimensions of the image and store it in the variable '$check'
              $fileDimensions = getimagesize($_FILES["prod_img"]["tmp_name"]);
              if($fileDimensions !== false) {
                   echo "File is an image - " . $fileDimensions["mime"] . ".";
                  // print_r($fileDimensions);
                  $uploadOk = 1;
              } else {
                  echo "File is not an image.";
                  $uploadOk = 0;
              }
          }
          // Check if file already exists
          if (file_exists($fileName1)) {
              echo "Sorry, file already exists.";
              $uploadOk = 0;
          }
          // Check file size
          //check if its greater than 500kb
          if ($_FILES["prod_img"]["size"] > 5000000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
          }
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
          }
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
              if (move_uploaded_file($_FILES["prod_img"]["tmp_name"], $fileName1)) {
                  echo "The file ". basename( $_FILES["prod_img"]["name"]). " has been uploaded.";
                  //echo '<image src="../image/'.basename( $_FILES["fileToUpload"]["name"]).'">';
              } else {
                  echo "Sorry, there was an error uploading your file.";
              }
          }
      }





      uploadImage();



      		//check if submit button was clicked

      	  $folderName = "./assets/images/uploads/";
          $fileName1 = $folderName.basename($_FILES["prod_img"]["name"]);


      	$category_id = $_POST['prod_category'];
      	// $brand_id = (int)$_POST['prod_brand'];
      	$prod_title = $_POST['prod_title'];
          $prod_price = $_POST['prod_price'];
          $prod_desc = $_POST['prod_desc'];
          $prod_id = $_POST['prod_id'];

          $insert_product= (new ProductController())->update_product_fxn($prod_title,$prod_price,$prod_desc,$category_id,$fileName1,$prod_id);
                                                                                                                                                                                                                         if($insert_product){
          $_SESSION['upload_success'] = "Product updated successfully";
              // header('Location:index.php');

              header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
          }else{
      		//echo failure
              $_SESSION['upload_error'] = "Error adding product";

              header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;

      		}



    }




?>
