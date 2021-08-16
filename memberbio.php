<?php include "dbconnect.php";?>
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
<body>    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Rheal Sacco</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <a class="btn btn-outline-success" href="login.php">Sign Out</a>
    </div>
  </div>
</nav>
<p class="fs-1 text-center">Single Member Details</p>
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
    <div class="list-group">
    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
    <a href="memberbio.php" class="list-group-item list-group-item-action active">Member Bio</a>
    <a href="loans.php" class="list-group-item list-group-item-action">Loans</a>
    <a href="downloads.php" class="list-group-item list-group-item-action">Reports</a>
    <a href="hr.php" class="list-group-item list-group-item-action">Human Resource</a>
    </div>
</div>
<div class="col">
      <form class="row g-3">
      <label for="loanno" class="col-sm-2 col-form-label">No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Date of Birth</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Old Member No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Birth Certificate No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Account Category</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Gender</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Salutation</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Marital Status</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">First Name</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Rejoined</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Second Name</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Date Rejoined</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Last Name</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Read/Write</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Politically Exposed</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Member Station</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Political Position</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Payroll/Staff No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Disabled</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Status</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Registration Date</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Blocked</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Id Number</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Member Category</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Passport No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Last Date Modified</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Form No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Created By</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">P.I.N Number</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Dividends Account</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Nationality</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Mobile Phone No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">County</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Mobile Money No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Current Address</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Email</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Bank Code</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-3 col-form-label">Bank Account No</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
    <label for="loanno" class="col-sm-2 col-form-label">Branch Code</label>
      <div class="col-3">
      <input type="text" class="form-control h-75" id="loanno">
    </div>
</form>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-sm-start">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="facebook.com">Facebook</a></li>
                <li class="d-inline-block ms-3"><a href="https://twitter.com">Twitter</a></li>
                <li class="d-inline-block ms-3"><a href="instagram.com">Instagram</a></li>
                <li class="d-inline-block ms-3"><a href="Dashboard.php">Home</a></li>
            </ul>
            <p style="text-align: right;"><a href="#">Back to top</a></p>
            <p style="text-align: center; color: white;">© 2021 Rheal Sacco. All Rights Reserved.</p>
        </div>
    </footer>
    </body>
</html>
