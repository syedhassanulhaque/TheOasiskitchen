<?php

include '_dbconnect.php';
// include '_logincheck.php';




$logout=false;

session_start();



if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)){

    $logout=true;
    $user_name=$_SESSION['username'];
    
}
else{
    $logout=false;
}


?>


<nav class="navbar navbar-dark navbar-expand-lg " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">TheOasisKitchen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Order Now</a>
          <?php
          if ($logout) {

            echo '    
            <li class="nav-item">
            <a class="nav-link" style="cursor: pointer;" href="order_status.php">My Orders</a>
          </li>     <li class="nav-item">
            <a class="nav-link" style="cursor: pointer;">Contact Us</a>
          </li>  ';
          } 


          else {
            echo '   <li class="nav-item">
            <a class="nav-link" style="cursor: pointer;">Contact Us</a>
          </li>
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Employee Section
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  
              <li><a class="dropdown-item bg-hover-danger" data-bs-target="#employeeloginModal" data-bs-toggle="modal">Employee Login</a></li>
              <li><a class="dropdown-item" href="#">Admin Panel</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
           
            </ul>
          </li> ';
          }
          ?>


       
     

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger mx-1" type="submit">Search</button>


        <?php
        if ($logout) {

          echo '   <div class="mx-2 "> ' . $user_name . '</div>
   
      <a href="partials/_logout.php" class="btn btn-outline-danger mx-2"role="button" style=" display:flex;justify-content:center; align-items:center;">Logout</a>';
        } else {
          echo '  <button class="btn btn-outline-danger mx-1" type="button" data-bs-target="#loginModal" data-bs-toggle="modal">Login</button>
    <button class="btn btn-outline-danger mx-1" type="button" data-bs-target="#signupModal" data-bs-toggle="modal">SignUp</button>';
        }
        ?>




      </form>
    </div>
  </div>
</nav>