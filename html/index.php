<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Engro Food Hub Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        input,
        input:focus {
            outline: none !important;

        }
    </style>


</head>

<body>
    <?php
    ob_start();
    session_start();
    if (isset($_SESSION['admin_id'])) {
        header("Location: dashboard.php");
    }
    include 'db.php';
    include 'unset.php';
    ?>


    <div class="site" id="page">

        <section class="hero-section hero-section--image clearfix clip">
            <div class="hero-section__wrap">
                <div class="hero-section__option">
                    <img src="assets/images/index.jpg" alt="Hero section image">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8">
                            <div class="title-01 title-01--11 text-center">
                                <h2 class="title__heading">
                                    <span>Engro</span>
                                    <strong class="hero-section__words">
                                        <span class="title__effect is-visible">Food&nbspHub</span>
                                        <span class="title__effect">Fertilizers</span>
                                    </strong>
                                </h2>
                                <div class="title__description">At the heart of our strategy lies the vision to be a leading provider of world class products and services!</div>
                                <br>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <input class="required" type="password" name="password" style="line-height: 1.625rem;letter-spacing: 1.75px;height: 60px ;width: 300px; font-size: 1rem; color: black; border: 3px solid green;  border-radius: 30px;background-color: white; padding: 12px 12px 12px 12px; font-family: Montserrat; text-align: center;" placeholder="PASSWORD"><br><br>

                                    <div class="title__action"><button class="btn btn-success">Admin Panel Login</button></div><br>
                                </form>
                                <a href="ForgetPassword.php" style="font-size: 14px;">Forget Password?</a><br>

                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $password = $_POST['password'];

        $count = 0;

        if (empty($password)) {

            echo "<script type='text/javascript'>swal('Enter Password');</script>";
        } else {

            $sql = "SELECT * FROM `admin`";

            $sth = $db->query($sql);

            while ($result = mysqli_fetch_array($sth)) {

                if ($result["password"] == $password) {
                    $_SESSION['admin_id'] = $result["email"];

                    $count++;
                    break;
                }
            }

            if ($count > 0) {

                header("Location: dashboard.php");

                ob_end_flush();
            } else if ($count == 0) {

                echo "<script type='text/javascript'>swal('Login Failed');</script>";

            }
        }
    }
    ?>

    <script src="assets/js/plugins/animate-headline.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>