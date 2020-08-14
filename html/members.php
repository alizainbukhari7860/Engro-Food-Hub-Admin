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
                        <h2 style="width: 20px;">Members</h2>



                        <a href="CreateAccount.php" <h6>+ Add Member</h6> </a>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div style="background-color: #E4FACC" class="white-box">
                            <div  class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Personal<BR>Number</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Mobile<br>Number</th>
                                            <th>Vehicle<br>Registration</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    $sql = "SELECT * FROM `members` WHERE `isDelete`=0";

                                    $sth = $db->query($sql);

                                    while ($result = mysqli_fetch_array($sth)) {

                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $result['ID'] ?></td>
                                                <td><?php echo $result['PersonalNumber'] ?></td>
                                                <td><?php echo $result['Username'] ?></td>
                                                <td><?php echo $result['Designation'] ?></td>
                                                <td><?php echo $result['Address'] ?></td>
                                                <td><?php echo $result['Email'] ?></td>
                                                <td><?php echo $result['PhoneNumber'] ?></td>
                                                <td><?php echo $result['UserVehicleRegistrationNo'] ?></td>
                                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                    <td><button class="btn" name="delete" value='<?php echo $result['ID'] ?>'><i class="fa fa-close"></i></button></td>
                                                </form>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
        </div>
    </div>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $delete = $_POST['delete'];

        $sql = "UPDATE `members` SET `isDelete` = '1' WHERE `members`.`ID` =$delete";
        $sth = $db->query($sql);
        if ($sth) {
            ?>
            <script>
                swal({

                    title: 'Member Deleted!',

                    type: 'success',

                    confirmButtonText: 'Ok!'

                }).then(function() {

                    window.location.href = "members.php";

                }, function(dismiss) {

                    if (dismiss === 'cancel') {

                        window.location.href = "members.php";

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