
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">>
<title>
Rheal Sacco
</title>
</head>
<body class="text-center">
<main class="form-signin">
  <form action = "auth.php" method = "POST">
    <h1 class="h3 mb-3 fw-normal">Sign into Rheal Sacco</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="Username"  name= "Username" placeholder="Username" required>
      <label for="Username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required>
      <label for="Password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="w-100 btn-lg btn btn-primary" value="
    submit">Login</button>
  </form>
  <div class="row pt-3">
    <div class="col">
  <a href="reset.php">Forgot Password?</a>
    </div>
    <div class="col-8">
  <a class="btn btn-outline-primary" href="signup.php">Sign Up to Rheal Sacco</a>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
