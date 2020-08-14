<?php
require 'header.php';
?>

<body class="fix-header">
    <?php

    include 'usersession.php';
    include 'db.php';
    include 'unset.php';
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
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Change Email</h4>
                    </div>
                </div>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="background-color: #E4FACC" class="white-box">
                                <label>Current Email</label>
                                <input type="email" class="form-control" placeholder="Enter Current Email" name="email">
                                <br><br>
                                <label>New Email</label>
                                <input type="email" class="form-control" placeholder="Enter New Email" name="newemail">
                                <br>

                                <input type="email" class="form-control" placeholder="Re-Enter New Email" name="confirmemail">
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $Email = $_POST['email'];
        $newEmail = $_POST['newemail'];
        $CEmail = $_POST['confirmemail'];
        $sql = "SELECT * FROM `admin`";

        $sth = $db->query($sql);

        $result = mysqli_fetch_array($sth);

        if (empty($newEmail) or empty($CEmail) or empty($Email)) {

            echo "<script type='text/javascript'>swal('All Fields Required');</script>";
        } else if ($newEmail != $CEmail) {
            echo "<script type='text/javascript'>swal('New Email and Confirm Email Doesnot Match');</script>";
        } else if ($result["email"] != $Email) {


            echo "<script type='text/javascript'>swal('Wrong Email');</script>";
        } else if ($result["email"] == $Email) {

            $sql = "UPDATE `admin` SET `email` = '$newEmail' WHERE `admin`.`email` =  '$Email'";
            $sth = $db->query($sql);

            if ($sth) {

                echo "<script type='text/javascript'>swal('Email Changed Succesfully!');</script>";
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