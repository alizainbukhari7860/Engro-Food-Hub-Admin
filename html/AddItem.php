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
                
                <div >
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-sm-12">
                                <div style="background-color: #E4FACC" class="white-box">
                                    <h3 class="box-title">Add Food Item</h3>
                                    <div style="background-color: #E4FACC" class="white-box">

                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input required type="text" class="form-control" placeholder="Enter the Name of Item" name="Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Item Price</label>
                                                <input required type="number" class="form-control" placeholder="Enter Price in PKR" name="Price">
                                            </div>
                                            <div class="form-group">
                                                <label>Preparation Time</label>
                                                <input required type="number" class="form-control" placeholder="Enter the Preparation Time in Minutes" name="PreparationTime">
                                            </div>
                                            <div class="form-group">
                                                <label>Calories</label>
                                                <input required type="number" class="form-control" placeholder="Enter Estimated Calories" name="Calories">
                                            </div>
                                            <div class="form-group">
                                                <label>Menu</label>
                                                <select class="form-control" name="Menu" id="Menu" required>
                                                    <option value="" disabled selected>Select a Menu</option>
                                                    <?php
                                                    $sql = "SELECT * FROM Menu";
                                                    $sth = $db->query($sql);
                                                    while ($result = mysqli_fetch_array($sth)) { ?>
                                                        <option value=<?php echo $result['ID'] ?>> <?php echo $result['Name'] ?> </option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <script>

                                            </script>

                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="Category" id="Category" required>
                                                    <option value="" disabled selected>Select a Category</option>

                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
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

        $name = $_POST['Name'];
        $price = $_POST['Price'];
        $pTime = $_POST['PreparationTime'];
        $cat = $_POST['Category'];

        $sql1 = "INSERT INTO `item` (`ID`, `Name`, `Price`, `Category`, `PreparationTime`) VALUES (NULL, '$name', '$price', '$cat', '$pTime')";
        $sth1 = $db->query($sql1);
        if ($sth1) {
            ?>
            <script>
                swal({

                    title: 'Item Added!',

                    type: 'success',

                    confirmButtonText: 'Ok!'

                }).then(function() {

                    window.location.href = "AddItem.php";

                }, function(dismiss) {

                    if (dismiss === 'cancel') {
                        window.location.href = "AddItem.php";
                    }

                });
            </script>
    <?php
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $("#Menu").change(function() {
                var mid = $("#Menu").val();
                $.ajax({
                    url: 'getCat.php',
                    method: 'post',
                    data: 'mid=' + mid
                }).done(function(Category) {
                    console.log(Category);

                    Category = JSON.parse(Category);
                    $('#Category').empty();
                    Category.forEach(function(Cat) {
                        $('#Category').append('<option value=' + Cat.ID + '>' + Cat.Name + '</option>');
                    })

                })
            })
        })
    </script>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/custom.min.js"></script>

</body>
</html>