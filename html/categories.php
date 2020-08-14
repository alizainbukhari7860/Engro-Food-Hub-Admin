<?php
require 'header.php';
?>

<body class="fix-header">
    <?php
    include 'usersession.php';
    include 'db.php';
    include 'unset.php';
    ?>
    <?php
    $sql = "SELECT * FROM Menu";
    $sth = $db->query($sql);
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
            <div class="row">
                    <?php require 'menunavbar.php'; ?>
                </div>

                <div style="background-color: #AAD6A5"  class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add a Category</h4>
                    </div>
                </div>

                <div style="background-color: #E4FACC" class="white-box">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label>Menu</label>

                            <select class="form-control" name="Menu">
                                <option disabled selected>Select a Menu</option>
                                <?php while ($result = mysqli_fetch_array($sth)) { ?>
                                    <option value=<?php echo $result['ID'] ?>> <?php echo $result['Name'] ?> </option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name of Category" name="Name">
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
        $menu = $_POST['Menu'];

        $sql = "INSERT INTO `categories` (`ID`, `name`, `Menu`) VALUES (NULL, '$name', '$menu')";
        $sth = $db->query($sql);
        if ($sth) {
            ?>
            <script>
                swal({
                    title: 'Category Added!',
                    type: 'success',
                    confirmButtonText: 'Ok!'
                }).then(function() {

                    window.location.href = "categories.php";

                }, function(dismiss) {
                    if (dismiss === 'cancel') {
                        window.location.href = "categories.php";
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