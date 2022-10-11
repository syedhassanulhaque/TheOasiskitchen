<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Status</title>
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
        <?php
               
        include "partials/_dbconnect.php";
        include 'partials/__navbar.php';
        if(!$logout){
          header('location:/TheOasisKitchen/index.php');
          // exit();
      }

      
        include 'partials/_loginmodal.php';
        include 'partials/_signupmodal.php';
        include 'partials/_employee_login.php';
        $user_id=$_SESSION['user_id'];


        $sql="SELECT order_id, dish_id, address , mobileno , cost,otp from orders where ordered_by='$user_id'";

        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if(!$num){
          echo '<div class="container">
          <div class="alert alert-warning my-5 " role="alert" style="position relative; top:10vw;">
                    <h4 class="alert-heading">Sorry!</h4>
                    <p>You have not ordered anything yet. Order with a coupoun code: <b>TRYNEW</b> and get upto 50% OFF.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
          </div>';
        die();
        }
        ?>



<div class="container my-5 py-5">
    <div clas="my-5 py-5"><h2>My Orders</h2></div>
<table class="table my-2 ">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Order Name</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">OTP</th>
      <th scope="col">Order Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
          $i=1;
          while ($row=mysqli_fetch_assoc($result)){
            $dish_id=$row['dish_id'];
            $sql3="select dish_name from dishes where dish_id='$dish_id' ";
            $result3=mysqli_query($conn,$sql3);
            $row3=mysqli_fetch_assoc($result3);
            $dish_name=$row3['dish_name'];


            echo '   <tr>
       
            <th scope="row" class="sno" >' . $i++ . '</th>
            <td>' . $dish_name . '</td>
            <td>' . $row['cost']. '</td>
            <td >' . $row['address'] . '</td>
            <td>' . $row['mobileno']. '</td>
            <td>' . $row['otp']. '</td>
            <td>' . 'Finding Employee'. '</td>
            <td><button type="button" class="btn btn-outline-danger action" value="' . $row['order_id']. '" >Cancel </button></td>
          </tr>';
          }
        
        ?>
 
    
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      // let actions = document.querySelectorAll(".action");
      // let snos = document.querySelectorAll(".sno");
      // console.log(actions);
      // i=actions.length;
      // console.log(i);
      // j=0;

      // actions.forEach(action => {
      
      //   action.addEventListener("click",()=>{
      //     reply=confirm("Do you really want to cancel the order?");


      //   })

      // });
    </script>
  </body>
</html>