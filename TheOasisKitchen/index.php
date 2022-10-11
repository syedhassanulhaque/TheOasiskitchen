<?php
  include "partials/_dbconnect.php";
  include 'partials/__navbar.php';
  include 'partials/_loginmodal.php';
  include 'partials/_signupmodal.php';
  include 'partials/_employee_login.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Oasis Kitchen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
      .alert{
        position: relative;
        top: 2vh;
        right: 0vw;
      }
    </style>
</head>

<body>
    <?php
   
   if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['invalid_user'])) {
        if ($_GET['invalid_user']) {
    echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
  
  </svg>

  <div class="alert">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <strong>Invalid Credentials!</strong> Please enter your correct email and password.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  </div>
  ';
  }}
   


    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['status'])) {
        $status=$_GET['status'];

        if ($status==1) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          
          </svg>

          <div class="alert">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                  <strong>Success!</strong> Your account hasbeen created successfully!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          </div>
          ';
        }

        if ($status==2) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          
          </svg>
          
          <div class="alert">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong>Sorry!</strong> User already exists. Try to signup with another email.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          </div>
          ';
        }

        if ($status==3) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          
          </svg>
          <div class="alert">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <strong>Error! </strong> Passwords do not match.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          </div>
          ';
        }
    }
    ?>
  
    <div class="container">
        <h1 class="my-3">Welcome to TheOasisKitchen</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, ipsum iure mollitia in sint suscipit quibusdam iusto nihil eos quidem natus dolore quaerat dicta fugit perspiciatis laborum deleniti vel ab corporis illum cupiditate?
        </p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-danger" type="button" > <a href="menu.php" style="text-decoration:none; color: white;"> Order Now</a></button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>