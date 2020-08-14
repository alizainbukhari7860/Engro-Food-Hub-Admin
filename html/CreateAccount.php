<?php
require 'header.php';
?>

<body class="fix-header">
    <?php
    include 'usersession.php';
    include 'db.php';
    include 'unset.php';
    date_default_timezone_set("Asia/Karachi");
    
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
                        <h4 class="page-title">Create Account</h4>
                    </div>

                </div>
                <div style="background-color: #E4FACC" class="white-box">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label>Personal Number</label>
                            <input type="Number" class="form-control" placeholder="Enter Personal Number" maxlength="10" name="PersonalNumber">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name of Member" name="Name">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" placeholder="Enter Your Designation" name="Designation">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="Email">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="Number" class="form-control" placeholder="Enter Mobile Phone Number" name="PhoneNumber">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Registration Number</label>
                            <input type="text" class="form-control" placeholder="Enter Vehicle Reg.No" name="UserVehicleRegistrationNo">
                            <small class="form-text text-muted">For e.g. ABC-123</small>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter Residential Address" name="Address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="Password">
                            <small class="form-text text-muted">Password must contain a number</small>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $vehicle = $_POST['UserVehicleRegistrationNo'];
        $pnumber = $_POST['PersonalNumber'];
        $address = $_POST['Address'];
        $designation = $_POST['Designation'];
        $phone = $_POST['PhoneNumber'];
        $date =date('Y-m-d');
        $sql = "INSERT INTO `members` (`ID`, `Username`, `Email`, `Password`, `UserVehicleRegistrationNo`, `PersonalNumber`, `Address`, `Designation`, `PhoneNumber`, `date`) VALUES (NULL, '$name', '$email', '$password', '$vehicle', '$pnumber', '$address', '$designation', '$phone', '$date')";
        $sth = $db->query($sql);
        if ($sth) {
            ?>
            <script>
                swal({

                    title: 'Member Added!',

                    type: 'success',

                    confirmButtonText: 'Ok!'

                }).then(function() {

                    window.location.href = "CreateAccount.php";

                }, function(dismiss) {

                    if (dismiss === 'cancel') {
                        window.location.href = "CreateAccount.php";
                    }

                });
            </script>

        <?php
            } else {
                ?>

            <script>
                swal({

                    title: 'Failed to add member!',

                    type: 'error',

                    confirmButtonText: 'Ok!'

                }).then(function() {

                    window.location.href = "CreateAccount.php";

                }, function(dismiss) {

                    if (dismiss === 'cancel') {
                        window.location.href = "CreateAccount.php";
                    }

                });
            </script>
    <?php
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