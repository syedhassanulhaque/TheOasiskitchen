<?php

include '_dbconnect.php';


if ($_SERVER['REQUEST_METHOD']=='POST') {
    
     $employee_id=$_POST['employee_id'];
     $password=$_POST['password'];
    
     


    $sql ="select * from employees where employee_id='$employee_id'";
    $result=mysqli_query($conn,$sql);
    
    $row=mysqli_fetch_assoc($result);
    $hashed=$row['employee_password'];
    $employee_name=$row['employee_name'];


    // echo $hashed;
    // echo "<br>";
    // echo md5(10);
    // exit;
    
    // $pass_verify=password_verify(6,$hashed);

    if ($password==$hashed) {
        $pass_verify=true;
    }

    if ($pass_verify) {
        session_start();
        $_SESSION['employee_id']=$employee_id;
        $_SESSION['loggedin']=true;
        $_SESSION['employee_name']=$employee_name;
        // echo "Logged in successfully!";
        header('location:/TheOasisKitchen/employee.php');
    }

    if(!$pass_verify){
        // header('location:/TheOasisKitchen/index.php');
        echo "Cannot verify password!";
        echo     $pass_verify;
    }


 }


?>