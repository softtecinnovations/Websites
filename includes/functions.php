<?php
include_once ('dbh.php');

if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    echo $fname;
    
    if(empty($fname) || empty($lname) || empty($email) || empty($comment))
    {
        header("Location:../contact.php?emptyfields");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location:../contact.php?email");
        exit();
    }
    else
    {
        $sql = "INSERT INTO form (fname, lname,email,comment) VALUES ('$fname', '$lname','$email', '$comment')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            header("Location:../contact.php?success");
            exit();
        }else
        {
            header("Location:../contact.php?unsuccessful");
            exit();
        }
    }
}
