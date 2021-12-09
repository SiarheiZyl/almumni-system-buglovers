<?php include('index.php') ?>
<style>
    * {

        box-sizing: border-box;
    }

    body {
        background: rgba(255, 180, 0, 0.2)
    }

    .row {
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 20px gray;
        margin-top: 40px;

    }

    img {
        border-radius: 30px
    }

    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: rgb(128, 41, 43);
        color: white;
        border-radius: 4px;
        font-weight: bold;
    }

    .btn1:hover {
        background-color: white;
        color: rgb(128, 41, 43);
        border: 1px solid;
    }
</style>

<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="./imgs/se_logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Sign in to your account</h1>

                <form action="index.php" method="GET">
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
                            <input type="submit" name="login" value="Login" class="btn1 mt-3 mb-5">
                        </div>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <p>Don't have an account? <a href="signup.php">Register Now</a></p>
                </form>
            </div>
        </div>
    </div>
</section>