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
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
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
            <h1 class="display-5 fw-bold text-center">PERSONAL DETAILS</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">County</p>
                        <div class="list-group">
                            <a href="order.php" class="list-group-item list-group-item-action">Orders</a>
                            <a href="personaldetails.php" class="list-group-item list-group-item-action active" aria-current="true">Personal details</a>
                            <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="container-fluid py-5">
                    <p class="fs-2 text-center">PERSONAL DETAILS</p><br>
                    <form class="row g-3">
                        <div class="col-6">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-6">
                            <label for="inputPassword4" class="form-label">Street</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-6">
                            <label for="inputPassword4" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-6">
                            <label for="inputPassword4" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-6">
                            <label for="inputPassword4" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-sm-start">
                <div class="container">
                    <ul class="bd-footer-links ps-0 mb-3">
                        <li class="d-inline-block"><a href="facebook.com">Facebook</a></li>
                        <li class="d-inline-block ms-3"><a href="https://twitter.com">Twitter</a></li>
                        <li class="d-inline-block ms-3"><a href="instagram.com">Instragam</a></li>
                        <li class="d-inline-block ms-3"><a href="shop.php">Shop</a></li>
                    </ul>
                    <p style="text-align: right;"><a href="#">Back to top</a></p>
                    <p style="text-align: center; color: white;">© 2021 e-Commerce co. All Rights Reserved.</p>
                </div>
            </footer>

</body>

</html>