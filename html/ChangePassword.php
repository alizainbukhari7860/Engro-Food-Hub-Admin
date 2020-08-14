<?php
require 'header.php';
?>

<body class="fix-header">
  
    <?php
    include "db.php";
    include 'usersession.php';
    include 'unset.php';

    $email = $_SESSION['admin_id'];
    ?>

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="wrapper">

        <?php
        include 'navbarsidebar.php';
        ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div style="background-color: #C2E5CA"  class="row bg-title">
                    <div  class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Change Password</h4>
                    </div>
                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div  class="row">
                        <div  class="col-md-12">
                            <div style="background-color: #E4FACC" class="white-box">
                                <label>Current Password</label>
                                <input type="password" class="form-control" placeholder="Enter Current Password" name="password">
                                <br><br>
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="Enter New Password" name="newpassword">
                                <br>
                                <input type="password" class="form-control" placeholder="Re-Enter New Password" name="confirmpassword">
                                <br>
                                <button type="submit" class="btn btn-success">Change</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
        </div>
    </div>

    <?php

    $sql = "SELECT * FROM `admin`";

    $sth = $db->query($sql);

    $result = mysqli_fetch_array($sth);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];

        if (empty($newpassword) or empty($confirmpassword) or empty($password)) {

            echo "<script type='text/javascript'>swal('All Fields Required');</script>";
        } else if ($newpassword != $confirmpassword) {
            echo "<script type='text/javascript'>swal('New Password and Confirm Password Doesnot Match');</script>";
        } else if ($result["password"] != $password) {


            echo "<script type='text/javascript'>swal('Wrong Password');</script>";
        } else if ($result["password"] == $password) {

            $sql = "UPDATE `admin` SET `password` = '$newpassword' WHERE `admin`.`email` =  '$email'";
            $sth = $db->query($sql);

            if ($sth) {

                echo "<script type='text/javascript'>swal('Password Changed Succesfully!');</script>";
            }
        }
    }
    ?>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/custom.min.js"></script>

</body>
</html>