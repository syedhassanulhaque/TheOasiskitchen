<?php

require '_dbconnect.php';

session_start();
session_unset();
session_destroy();


header('location:/TheOasisKitchen/index.php');


?>