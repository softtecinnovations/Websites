<?php
 $host = "localhost";
 $username = "root";
 $password= "";
 $dbname = "rhealsacco";

 $conn = mysqli_connect($host,$username,$password,$dbname) or die("Could not connect");
 function getUserAccessRoleByID($id)
 {
     global $conn;
         
     $query = "select Userposition from tbl_user where Index = ".$id;
     
     $result = mysqli_query($conn,$query);
     $row = mysqli_fetch_assoc($result);
         
     return $row['Userposition'];
 }
 ?>