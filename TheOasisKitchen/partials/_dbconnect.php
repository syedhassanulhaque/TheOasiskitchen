<?php
$servername="localhost";
$username="root";
$password="";
$database="the_oasis_kitchen";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    // echo "Connection is successful";
}
else{
    echo "Connection is notsuccessful". mysqli_connect_error($conn);
}
?>