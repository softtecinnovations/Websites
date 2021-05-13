<?php include 'includes/session.php';?>
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
            <h1 class="display-5 fw-bold text-center">CONTACT US</h1>
            <p class="fs-4 text-center">Talk to us for any feedback or comment.</p>
        </div>
    </div>
    <div class="p-5 mb-4 bg-secondary rounded-3">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col border-0">
                    <p class="fs-1 text-center text-light">Address</p>
                    <p class="fs-5 text-center text text-light">13/25 New Avenue<br> New Heaven, 45Y 73J<br> England, Great Britain</p>
                </div>
                <div class="col border-0">
                    <p class="fs-1 text-center text-light">Call Center</p>
                    <p class="fs-5 text-center text-light">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> +33 555 444 333</p>
                </div>
                <div class="col border-0">
                    <p class="fs-1 text-center text-light">Online Support</p>
                    <p class="fs-5 text-center text-light">Please feel free to write an email to us or to use our electronic ticketing system.<br> info@sell.com<br> Twitter</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form class="row g-3" method="post" action="includes/functions.php">
                    <div class="col-6">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname">
                    </div>
                    <div class="col-6">
                        <label for="inputlastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fff@gmail.com">
                    </div>

                    <div class="col-12">
                        <label for="inputFeedback" class="form-label">Feedback</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Write Feedback/Queries"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-outline-info" value="
                        Submit">Send</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <p>Yo Yo Yo Yo. Tundura mamblainer. Karao alipurura akakula Karo akadai tulimtundura. Eastlando madenge wa msart wanakunywa kwa chupa. Eih yo. Naskia imekaribia kura. Hawakuund baro miaka tando sai wanaturushia mfupa.</p>
            </div>
        </div>
    </div>
    <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-sm-start">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="facebook.com">Facebook</a></li>
                <li class="d-inline-block ms-3"><a href="https://twitter.com">Twitter</a></li>
                <li class="d-inline-block ms-3"><a href="instragam.com">Instragam</a></li>
                <li class="d-inline-block ms-3"><a href="shop.php">Shop</a></li>
            </ul>
            <p style="text-align: right;"><a href="#">Back to top</a></p>
            <p style="text-align: center;" class="text-light">© 2021 e-Commerce co. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>