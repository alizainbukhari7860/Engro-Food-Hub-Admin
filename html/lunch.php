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
                <div class="row">
                    <?php require 'menunavbar.php'; ?>

                </div>
                <div>
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-sm-12">
                                <div style="background-color: #E4FACC" class="white-box">
                                    <h3 class="box-title">Lunch Menu</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NAME</th>
                                                    <th>Price<br>(Rs.)</th>
                                                    <th>Preparation Time<br>(Minutes)</th>
                                                    <th>Calories<br>(Per Serving)</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $sql = "SELECT item.id,item.name,Price,PreparationTime,Calories FROM `item` join categories on item.Category=categories.ID JOIN menu on menu.ID=categories.Menu where menu.Name like '%Lunch%' and `isDelete`=0";

                                                $sth = $db->query($sql);

                                                while ($result = mysqli_fetch_array($sth)) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $result['id'] ?></td>
                                                        <td><?php echo $result['name'] ?></td>
                                                        <td><?php echo $result['Price'] ?></td>
                                                        <td><?php echo $result['PreparationTime'] ?></td>
                                                        <td><?php echo $result['Calories'] ?></td>
                                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                            <td><button class="btn" name='edit' value='<?php echo $result['id'] ?>'><i class="fa fa-edit"></i></button></button></td>
                                                        </form>
                                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                            <td><button class="btn" name='delete' value='<?php echo $result['id'] ?>'><i class="fa fa-close"></i></button></button></td>
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
                </div>
            </div>

            <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
        </div>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $delete = $_POST['delete'];
        $edit = $_POST['edit'];
        if ($delete) {
            $sql = "UPDATE `item` SET `isDelete` = '1' WHERE id=$delete";
            $sth = $db->query($sql);
            if ($sth) {
                ?>
                <script>
                    swal({

                        title: 'Item Deleted!',

                        type: 'success',

                        confirmButtonText: 'Ok!'

                    }).then(function() {

                        window.location.href = "lunch.php";

                    }, function(dismiss) {

                        if (dismiss === 'cancel') {

                            window.location.href = "lunch.php";

                        }

                    });
                </script>

    <?php
            }
        } else if ($edit) {
            $_SESSION["editlunch"] = $edit;
            header("Location: ./editlunch.php");
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