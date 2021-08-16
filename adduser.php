<?php
include_once ('dbconnect.php');

if(isset($_POST['submit']))
{
    $Fullname = mysqli_real_escape_string($conn, $_POST['Full Name']);
    $Userposition = mysqli_real_escape_string($conn, $_POST['Userposition']);
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);

    echo $fname;
    
    if(empty($Fullname) || empty($Userposition) || empty($Username) || empty($Password))
    {
        header("Location:../signup.php?emptyfields");
        exit();
    }
    else
    {
        $sql = "INSERT INTO users (Fullname,Userposition,Username,Password) VALUES ('$Fullname', '$Userposition','$Username', '$Password')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            header("Location:../signup.php?success");
            exit();
        }else
        {
            header("Location:../signup.php?unsuccessful");
            exit();
        }
    }
}
