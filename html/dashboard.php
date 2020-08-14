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
                    <divclass="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div style="background-color: #AAD6A5" class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-hashtag" aria-hidden="true"></i> Date</h3>
                            <ul class="list-inline two-part">
                                <li class="text-right">
                                    <span style="color: white; font-size: 18px; font-weight: bolder"><?php date_default_timezone_set("Asia/Karachi");
                                                                $d = date('jS M, Y');
                                                                $date =date('Y-m-d');
                                                                echo $d  ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div style="background-color: #AAD6A5" class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-bell" aria-hidden="true"></i> Total Orders</h3>
                            <ul class="list-inline two-part">
                                <?php $sql = "SELECT COUNT( order.ID) as totalorders FROM engro.order";
                                $sth = $db->query($sql);
                                $result = mysqli_fetch_array($sth);
                                ?>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-white" style="font-weight:bolder"><?php echo $result['totalorders'] ?></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div style="background-color: #AAD6A5" class="white-box analytics-info">
                            <h3 class="box-title"><i class="fa fa-users" aria-hidden="true"></i> Total Accounts</h3>
                            <ul class="list-inline two-part">
                                <?php $sql = "SELECT COUNT( members.ID) as totalmembers FROM members";
                                $sth = $db->query($sql);
                                $result = mysqli_fetch_array($sth);
                                ?>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span style="font-weight:bolder" class="counter text-white"><?php echo $result['totalmembers'] ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div style="background-color: #E4FACC" class="white-box">
                            <h3 class="box-title" style="font-family: consolas;font-size: 30px;color: seagreen;">Today's Orders<br></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>P. Number</th>
                                            <th>Name</th>
                                            <th>Order Items</th>
                                            <th>Item Price</th>
                                            <th>Quantity</th>
                                            <th>Prep Time</th>
                                            <th>Date/Time</th>
                                            <th>Total Price</th>
                                            <th>Order Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sql = "SELECT engro.order.id,members.PersonalNumber,members.Username,GROUP_CONCAT(item.Name) as items,GROUP_CONCAT(item.Price) as prices,GROUP_CONCAT(orderdetails.Quantity) as quantities,GROUP_CONCAT(item.Category) as categoriess,GROUP_CONCAT(item.PreparationTime) as pTime,engro.order.Date FROM engro.order join members on engro.order.User = engro.members.ID join orderdetails on engro.Order.ID=engro.orderdetails.Order join item on item.ID=orderdetails.Item WHERE engro.order.Served=0 and CAST(engro.order.Date as DATE) = '$date' GROUP by engro.order.id";
                                        $sth = $db->query($sql);
                                        while ($result = mysqli_fetch_array($sth)) {

                                            ?>

                                            <tr>
                                                <td><?PHP echo $result["PersonalNumber"] ?></td>
                                                <td><?PHP echo $result["Username"] ?></td>
                                                <td><?PHP echo $result["items"] ?></td>
                                                <td><?PHP echo $result["prices"] ?></td>
                                                <td><?PHP echo $result["quantities"] ?></td>
                                                <td><?PHP echo $result["pTime"] ?></td>
                                                <td><?PHP echo $result["Date"] ?></td>
                                                <td><?PHP
                                                        $totalPrice = 0;
                                                        $price = explode(',', $result['prices']);
                                                        $quantity = explode(',', $result['quantities']);
                                                        for ($i = 0; $i < count($price); $i++) {
                                                            $totalPrice += $price[$i] * $quantity[$i];
                                                        }

                                                        echo $totalPrice;
                                                        ?>
                                                </td>
                                                <td>
                                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
                                                        <button type="submit" class="btn btn-success" style="border-radius: 20px;">Served!</button> </form>
                                                </td>
                                            </tr>

                                        <?php } 
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $serveid = $_POST['id'];
                    $sql = "UPDATE `order` SET `Served`=1 WHERE order.id=$serveid ";
                    $sth = $db->query($sql);

                    if ($sth) {
                        ?>
                        <script>
                            swal({
                                title: 'Order Serverd',
                                type: 'success',
                                confirmButtonText: 'Ok!'
                            }).then(function() {
                                window.location.href = "dashboard.php";
                            }, function(dismiss) {

                                if (dismiss === 'cancel') {
                                    window.location.href = "dashboard.php";;
                                }
                            });
                        </script>
                    <?php } else {
                            ?>

                        <script>
                            swal({
                                title: 'Error Occured',
                                type: 'error',
                                confirmButtonText: 'Ok!'
                            }).then(function() {
                                window.location.href = "dashboard.php";
                            }, function(dismiss) {

                                if (dismiss === 'cancel') {
                                    window.location.href = "dashboard.php";
                                }
                            });
                        </script>
                <?php }
                }
                ?>
                <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
            </div>
        </div>

        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/waves.js"></script>
        <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
        <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
        <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dashboard1.js"></script>
        <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>
</html>