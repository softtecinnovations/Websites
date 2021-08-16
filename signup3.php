<?php include "adduser.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link href="style.css" rel="stylesheet">> -->
<title>
Rheal Sacco
</title>
</head>
<body class="text-center">
<p class="fs-1 text-center">Sign Up to Rheal Sacco</p>
<div class="container">
        <div class="row">
            <div class="col-8">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">General Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" >Other Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" tabindex="-1">Documents Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Payment</a>
                    </li>
                </ul>
            </div>
            <p class="fs-2 text-center">Upload of Required Documents. ID, Passport Photo and Payslip</p>
            <div class="row">
                <div class="col">
            <p>Id Front</p>
            <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
            </div>
                </div>
            <div class="col">
            <p>Id Back</p>
            <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
            </div>
            </div>
            </div>
            <div class="row pt-5">
                <div class="col">
            <p>Passport Photo</p>
            <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
            </div>
                </div>
                <div class="col">
            <p>Payslip</p>
            <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
            </div>
                </div>
            </div>
            <div class="row pt-3">
<div class="d-grid justify-content-start col">
<a type="button" class="btn btn-outline-primary" href="signup2.php">Previous</a>
</div>
<div class="d-grid justify-content-end col">
<a type="button" class="btn btn-outline-primary" href="signup4.php">Next</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>