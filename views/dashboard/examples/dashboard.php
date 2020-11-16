<?php
require_once '../../../init.php';
use App\User\User;
use App\User\Auth;
use App\User\Subscription;
use App\Session\Session;

use Controllers\ProductController\ProductController;

use Controllers\ProductController\PaymentController;

(new Subscription())->userWithSubscription();


 ?>

<?php
include_once './includes/header.php';
 ?>



            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">All Products</h4>
                  <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Title</th>
                      <th>Price</th>

                      <th>Category</th>
                    </thead>
                    <tbody>

  <?php



  $displaylist = (new ProductController())->viewAllProducts();

  if ($displaylist) {
  	foreach ($displaylist as $value) {
  		$id = $value['product_id'];
  		$title = $value['product_title'];
  		$price = $value['product_price'];
  		$desc =$value['product_desc'];
  		$cat = $value['category'];
          $_SESSION['id']=$id;
          $uid=$_SESSION['id'];

  		echo "<tr>";
  		echo "<td>$title</td>";
  		echo "<td>GH¢ $price.00</td>";

  		echo "<td>$cat</td>";
  		echo "<td><a href='#delete.php?deleteId=$id' class= 'btn btn-outline-danger'>Delete</a>
          | <a href='#addcontact.php?updateId=$uid' class= 'btn btn-outline-success'>Update</a>
    </td>";

    echo "</tr>";








  	}
  }





  ?>


                    </tbody>
                  </table>
                </div>
              </div>


            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Employees Stats</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <?php
      include_once './includes/footer.php';
       ?>
