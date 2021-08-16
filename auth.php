<!--?php      
    include('dbconnect.php');  
    $Username = $_POST['Username'];  
    $Password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $Username = stripcslashes($Username);  
        $Password = stripcslashes($Password);  
        $Username = mysqli_real_escape_string($conn, $Username);  
        $Password = mysqli_real_escape_string($conn, $Password);  
      
        $sql = "select * from users where Username = '$Username' and Password = '$Password'";  
        $result = $conn->query($query);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['Index'];
            $_SESSION['ROLE'] = $row['Userposition'];
            $_SESSION['NAME'] = $row['Username'];
            header("Location:dashboard.php");
            die();   
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?--> 
<?php
  //session_start();
  /* if (isset($_SESSION['ID'])) {
      header("Location:dashboard.php");
      exit();
  } */
  // Include database connectivity
    
  include_once('dbconnect.php');
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $Username = $conn->real_escape_string($_POST['Username']);
      $Password = $conn->real_escape_string($_POST['Password']);
      
  if (!empty($Username) || !empty($Password)) {
        $query  = "SELECT * FROM users WHERE Username = '$Username' and Password = '$Password'";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['Index'];
            $_SESSION['ROLE'] = $row['Userposition'];
            $_SESSION['NAME'] = $row['Username'];
            header("Location:dashboard.php");
            die();                              
        }else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }

?> 