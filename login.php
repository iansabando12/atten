<?php 
session_start();
require_once("connection.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/fonts/ionicons.min.css">
    <link rel="stylesheet" href="asset/css/Features-Blue.css">
    <link rel="stylesheet" href="asset/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="asset/css/styles.css">
</head>

<body>
    <div id="kalma" class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-people" id="icon"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required=""></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div>
            <div class="form-group"><button class="btn btn-primary btn-block" id="sub" name="login" type="submit">Log In</button></div><a class="forgot" href="signup.html">Create Account?</a></form>
            <a href="signup.html"></a>
    </div>html
    <div class="features-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Features</h2>
                <p class="text-center">Asian Institute of Computer Studies</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-android-laptop icon"></i>
                    <h3 class="name">Programming Class</h3>
                    <p class="description">The study of codes, java, html, css java script and also web design.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-android-archive icon"></i>
                    <h3 class="name">CSS Class</h3>
                    <p class="description">The study of Hardware Components and it's Function.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-ios-book icon"></i>
                    <h3 class="name">General Academic Strand</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-social-chrome-outline icon"></i>
                    <h3 class="name">HUMMS</h3>
                    <p class="description">The study of human society, politics, economics, and relationship.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-lock-combination icon"></i>
                    <h3 class="name">ABM</h3>
                    <p class="description">Accountancy Business and Management.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-ios-telephone icon"></i>
                    <h3 class="name">Contact us</h3>
                    <p class="description">WWW.AICS.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $q = 'SELECT * FROM `site` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"  ';

            $r = mysqli_query($con, $q);
            if ($r) {
                if (mysqli_num_rows($r) > 0){
                    $_SESSION['username'] = $username;
                    header("location:add.html");
                }else{
                    echo '<p class="p">Your username and password do not matched<p>'; 
                }
            }else{
                echo $q; 
            }
        }
    ?>
    <script src="signup/js/jquery.min.js"></script>
    <script src="signup/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>