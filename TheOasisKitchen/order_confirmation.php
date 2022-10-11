<?php
       if($_SERVER['REQUEST_METHOD']=='GET'){
        header('location:/TheOasisKitchen/index.php');
        exit();}
        
  include "partials/_dbconnect.php";
  include 'partials/__navbar.php';
  include 'partials/_loginmodal.php';
  include 'partials/_signupmodal.php';
  include 'partials/_employee_login.php';



    
    if(!$logout){
        header('location:/TheOasisKitchen/index.php');
        // exit();
    }

    if($logout){
            
        if($_SERVER['REQUEST_METHOD']=='GET'){
            header('location:/TheOasisKitchen/index.php');
            exit();

        }


    






        echo '
        <!doctype html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Order-confirmation</title>
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
        
        <body>';




        if($_SERVER['REQUEST_METHOD']=='POST'){
            // echo var_dump($_POST);
            // exit();
            $user_id=$_SESSION['user_id'];
            $dish_id=$_POST['dish_id'];
            $address=$_POST['address'];
            $mobileno=$_POST['mobileno'];
            $customer_name=$_POST['customer_name'];
            
            $sql="select *from dishes where dish_id='$dish_id'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
    
            $dish_name=$row['dish_name'];
            $price=$row['price'];
            $discount=$row['discount'];
    
            $cost =$row['price']-($row['price']*$row['discount']/100) ;
            
            //OTP generator

                function generateNumericOTP($n) {
                    
                    $generator = "1357902468";

                    $result = "";

                    for ($i = 1; $i <= $n; $i++) {
                        $result .= substr($generator, (rand()%(strlen($generator))), 1);
                    }

                    // Return result
                    return $result;
                }

                // Main program
                $n = 6;
                // print_r(generateNumericOTP($n));
                $otp=generateNumericOTP($n);




            $sql="INSERT INTO `orders` ( `ordered_by`, `dish_id`, `address`, `mobileno`, `cost`,`otp`,`order_status` ,`customer_name`) VALUES ( '$user_id', '$dish_id', '$address', '$mobileno', '$cost' ,'$otp' ,'$order_status' ,'$customer_name')";

            $result=mysqli_query($conn,$sql);
    
        }

        echo '    <div class="d-flex justify-content-center my-5" style="width:100vw; position:absolute; top: 10vh;">
        <div class="p-5 mb-4 bg-success text-light rounded-3 "style="width: 70vw; padding-x:auto">
            <div class="container py-2">
                <h4 class=" ">Order Placed successfully!</h4>
                <p class="col-md-8 fs-4">
                <ul class="list-group-flush">
                    <li class="list-group-item">Dish Name: '. $dish_name  . ' </li>
                    <li class="list-group-item">Main Price :'. $price .' </li>
                    <li class="list-group-item">Discount : '. $discount . '  %</li>
                    <li class="list-group-item">Total : '. $cost .  ' </li>
                </ul>
                </p>
                <a href="order_status.php" class="btn btn-outline-danger btn-lg" role="button" aria-disabled="true">Order Status</a>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>';
    }

?>


