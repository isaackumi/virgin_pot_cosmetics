

function test (){
  alert('hello')
}


function buy(prod_id){
  alert(prod_id)
}





function addItemToCart(prod_id, qty){
  // alert(prod_id)
  // alert(qty)
    var endpoint =  "http://13.68.189.1/sites/Fank_final/controllers/ProductController/CartController.php?prod_id="+prod_id+"&qty="+qty+"&type=add";


    // TODO : add flash-message to product.php.

  $.ajax({
    type:"GET",
    url:endpoint,
    success: function(data){
      var msg = data.hasOwnProperty('message');
      // console.log(data);
      var dt = "Item already in cart";
      setInterval('location.reload()', 100);
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
    var endpoint =  "http://13.68.189.1/sites/Fank_final/controllers/ProductController/CartController.php?prod_id="+prod_id+"&type=delete";

  $.ajax({
    type:"GET",
    url:endpoint,
    success: function(data){
      var msg = data.hasOwnProperty('message');
      // console.log(data);
      var dt = "Item already in cart";
      setInterval('location.reload()', 100);
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
    // alert(id)
    // alert(price)
    // setInterval('location.reload()', 5000);
    var endpoint =  "./buy-product.php?prod_id="+id+"&qty="+price+"&type=buy";

    $.ajax({
      ecrossOrigin: true,
        type:"GET",
        url:endpoint,

        success: function(){


                    // alert("You will now be redirected....");
                    sweetAutoclose();
                    window.location = `http://13.68.189.1/sites/Fank_final/views/buy-product.php`;

        },
        error: (err)=>console.log(err)
    })

}

function updateCartItemQty(prod_id){

  // alert(prod_id);
    var qty = document.getElementById("update-qty").value;
    // alert(qty);

    if(qty < 0){
        swal("Oops!", `Quantity cannot be less than 0`, "error")
        // document.getElementById("qty_span").innerHTML = 'quantity cannot be negative';
        // window.setTimeout(function(){location.href="shoppingCart.php"},1000);
    }else {
      var endpoint =  "http://13.68.189.1/sites/Fank_final/controllers/ProductController/CartController.php?prod_id="+prod_id+"&qty="+qty+"&type=update";

      $.ajax({
        type:"GET",
        url:endpoint,
        success: function(data){
          // var msg = data.hasOwnProperty('message');
          // console.log(data);
          setInterval('location.reload()', 100);
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

function sweetAutoclose(){
  let timerInterval
swal({
  title: 'You will be redeirected!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 4000,
  timerProgressBar: true,
  willOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}


// comfirm before delete sweetalert
// Swal.fire({
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   icon: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
// }).then((result) => {
//   if (result.isConfirmed) {
//     Swal.fire(
//       'Deleted!',
//       'Your file has been deleted.',
//       'success'
//     )
//   }
// })
