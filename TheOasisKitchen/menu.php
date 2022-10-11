



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" ></script>
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
            position: absolute;
            top: 0;
            width: 100vw;
            color: white !important;
            background-color: rgba(0, 0, 0);
        }

        .category {

            min-width: 110vw;
            overflow-x: scroll;
        }

    </style>
</head>

<body>
    <?php
    include "partials/_dbconnect.php";
    include 'partials/__navbar.php';
    include 'partials/_loginmodal.php';
    include 'partials/_signupmodal.php';
    include 'partials/_employee_login.php';

 
    ?>

    <div class="container-fluid my-5">
        <h2 class="my-2 py-5">Inspiration for your first order</h2>
        <div class="container row d-flex justify-content-center align-items-center " id="">
        <?php
        $sql="select distinct category from dishes limit 4";
        $result=mysqli_query($conn,$sql);

        while ($row=mysqli_fetch_assoc($result)) {
            echo ' 

            <div class="card my-2 mx-2 " style="width: 18rem; border-radius:18rem; overflow:hidden">
                <img src="https://source.unsplash.com/random/500x400/?food,'. $row['category'] .'" class="card-img-top" alt="...">
                <div class="card-body">
                  <center><h5 class="card-text"><b>'. $row['category'] .'</b></h5></center>  
                </div>
            </div>' ;
        }

        
        ?>
       

       </div>
    </div>
    <div class="container-fluid my-3 ">
        <h2>Order your food now!</h2>

        <div class="d-flex justify-content-center align-items-center flex-wrap">


        <?php
        $sql="select * from dishes";
        $result=mysqli_query($conn,$sql);

        while ($row=mysqli_fetch_assoc($result)) {
            $cost =$row['price']-($row['price']*$row['discount']/100) ;
            $dish_id=$row['dish_id'] ;
            echo '  <div class="p-2">
            <div class="card" style="width: 18rem;">
            <span class="badge rounded-pill text-bg-primary" style="position:absolute;  top:200px; left:0; ">'. $row['discount'] .'% OFF</span>
                <img src="https://source.unsplash.com/random/500x400/?'. $row['category'] .'" class="card-img-top" alt="...">
                
                <div class="card-body">
           
                <p class="card-title pricing-card-title">₹ <s>'. $row['price']    .' </s></p>
                <h4 class="card-title pricing-card-title">₹ '. $cost .'<small> for one </small></h4>
                    <h5 class="card-title">'. $row['dish_name'] .'</h5>
                    <a href="order.php?dish_id='. $dish_id .'"class="btn btn-danger" name="'. $dish_id .'">Order Now</a >
                 
                </div>
            </div>
        </div>
' ;
        }

        
        ?>
             <!-- <form action="order.php?" method="GET">
                    <button class="btn btn-danger" name="'. $dish_id .'">Order Now</button >
                    </form> -->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        
    </script>
</body>

</html>