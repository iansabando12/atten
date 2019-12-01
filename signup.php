<?php require_once("connection.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="signup/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup/css/Highlight-Blue.css">
    <link rel="stylesheet" href="signup/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="signup/css/styles.css">
    
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div id="craf" class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
                <div class="form-group"><input class="form-control" type="text" onkeyup="check_user()" name="username" placeholder="Username" required=""></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button name="register" class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="login.html">Login here.</a>
                <center> <a id="wew" href="index.html">Home</a> </center>
                <div id="checking"></div>
                
        </div>
    </div>
    <div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Note:</h2>
                <p class="text-center">Education is the most Powerful tool<br>because it can't be stolen.</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="#">Memory of class 2019/2020 Ic3AB</a></div>
        </div>
    </div>
    <?php 
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        

        $q = "INSERT INTO `site` (`id`, `name`, `username`, `password`) VALUES ('', '".$name."', '".$username."', '".$password."')";
        $r = mysqli_query($con, $q);

        if ($r) {
                header("location:login.php");
        }
        else{
            echo $q;
        }
        }
    ?>
    <script src="signup/js/jquery.min.js"></script>
    <script src="signup/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>