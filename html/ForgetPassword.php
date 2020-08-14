<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Engro Food Hub Admin Panel</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body style="background-image: url(./assets/images/index.jpg); background-size: cover;">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <?php

  ob_start();
  session_start();
  if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
  }

  include 'db.php';
  include 'unset.php';
 
  ?>

  <div class="form-gap"></div>
  <div class="container">

    <div class="row">
      <br><br><br><br>
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="opacity: 0.8;">
          <div style="background-color: #C2E5CA" class="panel-body">
            <div  class="text-center">
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 class="text-center">Forgot Password?</h2>
              <p>Enter the valid email address to get code.</p>
              <div class="panel-body">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <input id="email" name="email" placeholder="Admin Email Address" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="recover-submit" class="btn btn-lg btn-success btn-block" value="Send Code" type="submit">
                  </div>
                  <a href="index.php" style="font-size: 14px; text-decoration: none;">Back to Login Screen</a>

                  <input type="hidden" class="hide" name="token" id="token" value="">
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $sql = "SELECT * FROM `admin` WHERE `email` LIKE '$email'";
    $sth = $db->query($sql);
    $result = mysqli_fetch_array($sth);
    
    if ($result) {
      $msg = "Your Password is: " . $result['password'];

      $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
      $this_mail = mail($email, "FORGOT PASSWORD", $msg, $headers);
      if ($this_mail) {
        ?>
        <script>
          swal({
            title: 'Password Sent to Your Email!',
            type: 'success',
            confirmButtonText: 'Ok!'
          }).then(function() {
            window.location.href = "index.php";
          }, function(dismiss) {
            if (dismiss === 'cancel') {
              window.location.href = "index.php";;
            }
          });
        </script>
      <?php }
        } else {
          ?>

      <script>
        swal({
          title: 'Invalid Email!',
          type: 'error',
          confirmButtonText: 'Ok!'
        }).then(function() {
          window.location.href = "ForgetPassword.php";
        }, function(dismiss) {
          if (dismiss === 'cancel') {
            window.location.href = "ForgetPassword.php";;
          }
        });
      </script>
  <?php }
  }
  ?>


</body>
</html>