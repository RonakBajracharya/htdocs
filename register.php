<?php
session_start();
?>
<html>
<head>
    <title>Register|Page</title>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <section id="contact" class="section-bg">

        <div class="form">
          <form <form method="post" action="database.php" autocomplete="off" role="form" class="php-email-form">
            <div class="container text-center">
                <div class="section-header mb-4 pb-0 mt-3">
                <h2>Register</h2>
                       
                <?php
            if (!isset($_SESSION['reg-msg']))
                {
                    echo "<p>PLEASE FILL THE FORM</p>";
                } 
            else 
                {
                    echo "<h2>" . $_SESSION['reg-msg'] . "</h2><hr>";
                    session_destroy();
                }
            ?>  
             </div>
             <div class="form-group col-md-12 mt-3">
                <input type="text" name="Name" class="form-control" id="Name" placeholder="Name" required autofocus>
              </div>
              <div class="form-group col-md-12 mt-3">
                <input type="text" name="Uname" class="form-control" id="Uname" placeholder="Username" required>
              </div>
              <div class="form-group col-md-12 mt-3">
                <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" required>
              </div>
              <div class="form-group col-md-12 mt-3">
                <input type="password" class="form-control" name="Pass" id="Pass" placeholder="Password" required>
              </div>
            </div class="mt-3 container">
            <div class="text-center mt-3"><button name="submit" type="submit">Register</button></div>
          </form>
        </div>

      </div>
    </section>

          <div class="text-center mt-3">
            <span>
            Already have an account ?<a href="index.php"> Login</a>
            </span>
            </div>
        </form>
    </div>



   