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
    <title>Employee-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        * {
            margin: 0%;
            padding: 0%;
            font-family: cursive;
        }

        body {
            overflow-x: hidden;
        }

        #navbar {
            z-index: 1;
            position: absolute;
            top: 0;
            width: 100vw;
            color: white !important;
            background-color: rgba(0, 0, 0);
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 0rem;
        }
    </style>
  </head>
  <body>
       

        <div class="container  my-5 ">
        <div class="d-flex justify-content-center my-5" >
        <div class="p-5 mb-4 bg-dark text-light rounded-3 my-4 " style="width:70vw;">
            <div class="container py-2">
                <h4 class=" ">Welcome Rohan </h4>
                <p class="col-md-8 fs-4">
                <ul class="list-group-flush">
                    <li class="list-group-item">Employee ID:346586 </li>
                    <li class="list-group-item">Ranking: 200</li>
                    <li class="list-group-item">Rating : 9/10</li>
                    <li class="list-group-item">Total Earning: ₹ 28500</li>
                </ul>
                </p>
                <button class="btn btn-outline-danger btn-lg" type="button">Order Status</button>
            </div>
        </div>
    </div>
        </div>


<div class="container my-5 py-3">
    <div clas="my-5 py-5"><h2>My Orders</h2></div>
<table class="table my-2 ">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Order Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from orders";
    $result= mysqli_query($conn,$sql);
    $i=1;
  //  echo  $_SESSION['username'];
  //  exit();
    while ($row=mysqli_fetch_assoc($result)) {
      echo '
      <tr>
      <th scope="row">'. $i . '</th>
      <td>'.  $row['customer_name'] . '</td>
      <td>'. $row['cost'] . '</td>
      <td>'. $row['address']. '</td>
      <td >'. $row['mobileno'] . '</td>
      <td>'. $row['order_status'] . '</td>
     
      <td><button type="button" class="btn btn-outline-danger"> Accept </button></td>
    </tr> ';

    $i++;
    }
    
    ?>
    
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>