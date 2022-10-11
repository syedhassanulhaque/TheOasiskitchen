<?php

    include "partials/_dbconnect.php";
    // include 'partials/_logincheck.php';
    include 'partials/__navbar.php';


    if(!$logout){
        header('location:/TheOasisKitchen/index.php');
        // exit();
    }


    
    include 'partials/_loginmodal.php';
    include 'partials/_signupmodal.php';
    include 'partials/_employee_login.php';



    if($logout){

        
        echo '    <!doctype html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Order Now</title>
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
                    background-color: rgba(0, 0, 0, 0.7);
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
        
        
        
            <div class="container-fluid my-0" style="z-index:-10; ">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/random/2400x800/?pizza" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/2400x800/?pizza" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/random/2400x800/?pizza" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="container">
                <h1 class="my-5">Pie Pizza</h1>
                <hr>
                <h2>Order Online</h2>
                <div class="container " style="width:60vw;">';



                    if($_SERVER['REQUEST_METHOD']=='GET'){
                        $dish_id=$_GET['dish_id'];
    
    
                        $sql="select * from dishes where dish_id='$dish_id'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
    
                        $dish_name=$row['dish_name'];
                        $price=$row['price'];
                        $discount=$row['discount'];
    
                        echo '    
                        <form  method="POST"  action="order_confirmation.php"  >

                         <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dish Name:</label>
                        <input type="text" class="form-control" value="'. $dish_name .'" disabled>
                  </div>
    
    
                  <div class="mb-3">
                  <label for="" class="form-label"> Price (In Rupees):</label>
                  <input type="number" class="form-control" value="'. $price .'" disabled>
            </div>
            <input type="number" name="dish_id" class="form-control" value="'. $dish_id .'" style="display:none">

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="customer_name" type="text" class="form-control" required>
      </div>

            <div class="mb-3">
            <label for="address" class="form-label">Address</label>
                <textarea name="address" id="" cols="30" rows="5"class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile No</label>
                <input name="mobileno" type="number" class="form-control" required>
          </div>

           <div class="mb-3">
           <button type="submit" class="btn btn-danger form-control">Place Order</button>
           </div>
      
        </form>

    ';
    
                    }

                    echo '

                   
            </div>
    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    
    </html>';
    }
    ?>
    

       

