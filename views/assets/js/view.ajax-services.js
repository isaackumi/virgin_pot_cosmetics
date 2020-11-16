

function test (){
  alert('hello')
}





function addItemToCart(prod_id, qty){
  // alert(prod_id)
  // alert(qty)
    var endpoint =  "http://localhost/sites/Fank_final/controllers/ProductController/CartController.php?prod_id="+prod_id+"&qty="+qty+"&type=add";


    // TODO : add flash-message to product.php.

  $.ajax({
    type:"GET",
    url:endpoint,
    success: function(data){
      var msg = data.hasOwnProperty('message');
      // console.log(data);
      var dt = "Item already in cart";
      if (data == dt) {
        swal("Oops!", `${data}`, "error")
      }else{
        swal("Good job!", `${data}`, "success")
      }

    },
    error: (err)=>console.log(err)
  })
}









function removeCartItem(prod_id){
  // alert(prod_id)
    var endpoint =  "../controllers/cart_controller.php?prod_id="+prod_id+"&qty="+"&type=buy";

  $.ajax({
    type:"GET",
    url:endpoint,
    success: function(data){
      var msg = data.hasOwnProperty('message');
      // console.log(data);
      var dt = "Item already in cart";
      if (data == dt) {
        swal("Oops!", `${data}`, "error")
      }else{
        swal("Good job!", `${data}`, "success")
      }

    },
    error: (err)=>console.log(err)
  })

}






function buyProduct(id,price){
    // alert(prod_id)
    alert(price)
    // var endpoint =  "../controllers/cart_controller.php?prod_id="+prod_id+"&qty="+"&type=delete";

    $.ajax({
        type:"GET",
        url:endpoint,
        success: function(data){
            var msg = data.hasOwnProperty('message');
            // console.log(data);
            var dt = "Item already in cart";
            if (data == dt) {
                swal("Oops!", `${data}`, "error")
            }else{
                swal("Good job!", `${data}`, "success")
            }

        },
        error: (err)=>console.log(err)
    })

}

function updateCartItemQty(prod_id){

  // alert(prod_id);
    var qty = document.getElementById("update-qty").value;
    // alert(qty);
    if(qty < 0){
        document.getElementById("qty_span").innerHTML = 'quantity cannot be negative';
        window.setTimeout(function(){location.href="shoppingCart.php"},1000);
    }else {
      var endpoint =  "../controllers/cart_controller.php?prod_id="+prod_id+"&qty="+qty+"&type=update";

      $.ajax({
        type:"GET",
        url:endpoint,
        success: function(data){
          // var msg = data.hasOwnProperty('message');
          // console.log(data);
          var dt = "Item already in cart";
          if (data == dt) {
            swal("Oops!", `${data}`, "error")
          }else{
            swal("Good job!", `${data}`, "success")
          }

        },
        error: (err)=>console.log(err)
      })

    }


}
