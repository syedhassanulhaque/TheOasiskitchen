<?php

require '_dbconnect.php';

$invalid_user=false;


if ($_SERVER['REQUEST_METHOD']=='POST') {
    
     $email=$_POST['email'];
     $password=$_POST['password'];
    
     


    $sql ="select * from users where user_email='$email'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $hashed=$row['password'];
    $username=$row['user_name'];
    $user_id=$row['user_id'];
    $pass_verify=password_verify($password,$hashed);

    if ($pass_verify) {
        session_start();
        $_SESSION['user_id']=$user_id;
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        // echo "Logged in successfully!";
        header('location:/TheOasisKitchen/index.php');
    }
    else{
        $invalid_user=true;
        header('location:/TheOasisKitchen/index.php?invalid_user='.$invalid_user);
    }


 }


?>