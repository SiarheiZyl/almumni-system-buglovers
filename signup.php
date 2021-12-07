<?php


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register | Alumni Association</title>
    <style>
        *{
            
            box-sizing: border-box;
        }
        body{
            background: rgba(255, 180, 0, 0.2)
            
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow:12px 12px 20px gray;
            margin-top:100px;
            
        }
        img{
            border-radius:30px
        }
        .btn1{
            border:none;
            outline:none;
            height:50px;
            width:100%;
            background-color:rgb(128,41,43);
            color:white;
            border-radius:4px;
            font-weight:bold;
        }
        .btn1:hover{
            background-color:white;
            color:rgb(128,41,43);
            border:1px solid;
        }
    </style>
  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="./imgs/se_logo.png" alt="" class="img-container">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Open a new account</h1>

                    <form action="signup.php" method="POST">
                         <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="f_name" placeholder="First Name" class="form-control my-3 p-4">
                            </div> 
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="l_name" placeholder="Last Name" class="form-control my-3 p-4">
                            </div>                      
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="email" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="password" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="re_password" placeholder="retype password" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="register" value="Register" class="btn1 mt-3 mb-5">
                            </div>
                        </div>
                        <p>Already registered? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>