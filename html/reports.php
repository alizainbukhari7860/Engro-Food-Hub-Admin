    <?php
require 'header.php';
?>

<body class="fix-header">
    <?php
    include 'usersession.php';
    include 'db.php';
    include 'unset.php';
    date_default_timezone_set("Asia/Karachi");
    $date =date('Y-m-d');
 
    //testing  $date='2020-09-09';
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
                        <h4 class="page-title">Reports</h4>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">







                        <?php
// Total orders
$totalordersql = "SELECT count(`order`.`ID`) as TOTALORDERS from `order` join `orderdetails` on `order`.`ID`=`orderdetails`.`Order` join `item` on `item`.`ID`=`orderdetails`.`Item` join `categories` on `categories`.`ID`=`item`.`Category` JOIN `menu` ON `menu`.`ID`=`categories`.`Menu` where `order`.`Date` like '%$date%' GROUP by `order`.`ID`";

$sth = $db->query($totalordersql);

$orders = mysqli_fetch_array($sth);

//Total Dinners

$totaldinnersql = "SELECT count(`menu`.`ID`) as TotalDinner from `order` join `orderdetails` on `order`.`ID`=`orderdetails`.`Order` join `item` on `item`.`ID`=`orderdetails`.`Item` join `categories` on `categories`.`ID`=`item`.`Category` JOIN `menu` ON `menu`.`ID`=`categories`.`Menu` WHERE `menu`.`Name` like '%Dinner%' and `order`.`Date` like '%$date%'";

$sth = $db->query($totaldinnersql);

$dinner = mysqli_fetch_array($sth);
//total breakfast
$totalbreakfastsql = "SELECT count(`menu`.`ID`) as TotalBreakfast from `order` join `orderdetails` on `order`.`ID`=`orderdetails`.`Order` join `item` on `item`.`ID`=`orderdetails`.`Item` join `categories` on `categories`.`ID`=`item`.`Category` JOIN `menu` ON `menu`.`ID`=`categories`.`Menu` WHERE `menu`.`Name` like '%Breakfast%' and `order`.`Date` like '%$date%'";

$sth = $db->query($totalbreakfastsql);

$breakfast = mysqli_fetch_array($sth);
//total lunch

$totallunchsql = "SELECT count(`menu`.`ID`) as TotalLunch from `order` join `orderdetails` on `order`.`ID`=`orderdetails`.`Order` join `item` on `item`.`ID`=`orderdetails`.`Item` join `categories` on `categories`.`ID`=`item`.`Category` JOIN `menu` ON `menu`.`ID`=`categories`.`Menu` WHERE `menu`.`Name` like '%Lunch%' and `order`.`Date` like '%$date%'";

$sth = $db->query($totallunchsql);

$lunch= mysqli_fetch_array($sth);

//total snacks
$totalsnacksql = "SELECT count(`menu`.`ID`) as TotalSnacks from `order` join `orderdetails` on `order`.`ID`=`orderdetails`.`Order` join `item` on `item`.`ID`=`orderdetails`.`Item` join `categories` on `categories`.`ID`=`item`.`Category` JOIN `menu` ON `menu`.`ID`=`categories`.`Menu` WHERE `menu`.`Name` like '%Snacks%' and `order`.`Date` like '%$date%'";

$sth = $db->query($totalsnacksql);

$snacks = mysqli_fetch_array($sth);

    ?>

                        
                        <a href="#">
                            <img style="margin-bottom:100px;" alt="Graph" src="https://quickchart.io/chart?c=
                            {type: 'pie',data: {datasets: [{data: [ <?php if($breakfast['TotalBreakfast']!=0){
                                echo $breakfast['TotalBreakfast'];
                                                            }?>, <?php if($lunch['TotalLunch']!=0){
                                                                echo $lunch['TotalLunch'];
                                                                                            }?>, <?php if($snacks['TotalSnacks']!=0){
echo $snacks['TotalSnacks'];
                            }?>, <?php if($dinner['TotalDinner']!=0){
                                echo $dinner['TotalDinner'];
                                                            }?>],backgroundColor: ['rgb(255, 99, 132)','rgb(255, 159, 64)','rgb(255, 205, 86)','rgb(75, 192, 192)','rgb(54, 162, 235)',],label: 'Total Orders',},],labels: ['Breakfast', 'Lunch', 'Snacks', 'Dinner'],},}"
                            width="1000" height="600">
                            </a> 
<?php
$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='01'";

$sth = $db->query($sql);

$jan = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='02'";

$sth = $db->query($sql);

$feb = mysqli_fetch_array($sth);


$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='03'";

$sth = $db->query($sql);

$mar = mysqli_fetch_array($sth);


$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='04'";

$sth = $db->query($sql);

$apr = mysqli_fetch_array($sth);


$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='05'";

$sth = $db->query($sql);

$may = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='06'";

$sth = $db->query($sql);

$jun = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='07'";

$sth = $db->query($sql);

$jul = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='08'";

$sth = $db->query($sql);

$aug = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='09'";

$sth = $db->query($sql);

$sep = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='10'";

$sth = $db->query($sql);

$oct = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='11'";

$sth = $db->query($sql);

$nov = mysqli_fetch_array($sth);

$sql = "SELECT count(*) as totalMembers FROM `members` where Month(date)='12'";

$sth = $db->query($sql);

$dec = mysqli_fetch_array($sth);



                            
     ?>
                            <a href="#">
                            <img alt="Graph" src="https://quickchart.io/chart?c= { type: 'line', data: { labels: ['Jan','Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], datasets: [{ backgroundColor: 'rgba(255, 99, 132, 0.5)', borderColor: 'rgb(255, 99, 132)', label: 'Total Accounts', data: [<?php echo $jan['totalMembers']; ?>,<?php echo $feb['totalMembers']; ?>,<?php echo $mar['totalMembers']; ?>,<?php echo $apr['totalMembers']; ?>,<?php echo $may['totalMembers']; ?>,<?php echo $jun['totalMembers']; ?>,<?php echo $jul['totalMembers']; ?>,<?php echo $aug['totalMembers']; ?>,<?php echo $sep['totalMembers']; ?>,<?php echo $oct['totalMembers']; ?>,<?php echo $nov['totalMembers']; ?>,<?php echo $dec['totalMembers']; ?>], fill:false }, ], }, options: { scales: { xAxes: [ { ticks: { autoSkip: false, maxRotation: 0, }, }, ], }, title: {display: true, }, }, }"
                            width="1000" height="600">
                            </a>
                            








                            <div style="display: flex;justify-content: center;text-align:cente;" >
                                <a href="./reports/AdminDailyReport.php">
                                <h4  class="btn btn-info" style="padding: 20px; border-radius: 50px;font-size:20px;margin-top:100px;"><i class="fa fa-download"></i>  Download Mess Report</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="footer text-center" style="background-color: #C2E5CA"> 2020 &copy; Brought to you by Ali Zain Bukhari, Wajid Javed and Gulraiz Naseem </footer>
        </div>
    </div>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/custom.min.js"></script>

</body>
</html>