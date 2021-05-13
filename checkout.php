<?php include 'includes/session.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>e-Commerce1</title>
</head>

<body style="padding-top: 60px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-lg p-3 mb-5 rounded">
        <div class="container-fluid">
            <a class="navbar-brand">e-Commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-end">
                    <ul class="navbar -nav me-auto mb-2 mb-lg-0">
                        <a href="checkout.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                        </a>&nbsp;
                        <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg></a>
                    </ul>&nbsp;
                    <form class="d-flex">
                        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-4 bg-info rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-center">SHOPPING CART</h1>
            <p class="fs-4 text-center">You have # items in your cart</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="table-responsive">
                    <table class="table caption-top table-striped table-hover">
                        <caption>Your Orders</caption>
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                           <!--  <tr>
                                <td>Type</td>
                                <td>1000Kshs</td>
                                <td>4</td>
                                <td>4000Kshs</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>1000Kshs</td>
                                <td>4</td>
                                <td>4000Kshs</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>1000Kshs</td>
                                <td>4</td>
                                <td>4000Kshs</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="fs-3">ORDER SUMMARY</p>
                        <p>Shipping and additional costs are calculated based on values you have entered.</p>
                        <p class="float-start">Order Subtotal</p>
                        <p class="float-end">12000Kshs</p>
                    </li>
                    <li class="list-group-item">
                        <p class="float-start">Shipping and Handling</p>
                        <p class="float-end">200Kshs</p>
                    </li>
                    <li class="list-group-item">
                        <p class="float-start">Tax</p>
                        <p class="float-end">0Kshs</p>
                    </li>
                    <li class="list-group-item">
                        <p class="float-start">Total</p>
                        <p class="float-end fw-bold">12200Kshs</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>
    <a type="button" class="btn btn-outline-primary" href="shop.php">Continue Shopping</a>
    <a type="button" class="btn btn-outline-secondary" href="checkout2.php">Checkout</a>
    <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-sm-start">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="facebook.com">Facebook</a></li>
                <li class="d-inline-block ms-3"><a href="https://twitter.com">Twitter</a></li>
                <li class="d-inline-block ms-3"><a href="instragam.com">Instragam</a></li>
                <li class="d-inline-block ms-3"><a href="shop.php">Shop</a></li>
            </ul>
            <p style="text-align: right;"><a href="#">Back to top</a></p>
            <p style="text-align: center; color: white;">© 2021 e-Commerce co. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>