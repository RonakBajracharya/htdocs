<html>
<head>
<title>Admin|Login</title>
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
            <div class="container text-center">
                <div class="section-header mb-4 pb-0 mt-3">
                       
                <?php
        session_start();
        include_once("conn.php");
        $query = "SELECT * FROM info";
        $result = mysqli_query($conn, $query);
        if(isset($_GET['admin-msg']))
            {
                echo $_GET['admin-msg'];
            }   
        else
            {
                echo "<h2>Welcome " . $_SESSION['username'] . "</h2>";
            }
    
        echo "<p>You are logged in as an Admin</p><br>";
    ?>

             </div>
             <div class="container"><table class="table" border="2">
        <th>User_Id</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        
        
    <?php
        while ($row = mysqli_fetch_object($result)) 
            {
    ?>
        <tr>
            <td><?php echo $row->UserID; ?></td>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Uname; ?></td>
            <td><?php echo $row->Pass; ?></td>
            <td><?php echo $row->Email; ?></td>
        </tr>
    <?php
             }
    ?> 
    </table></div>
    <br>
            <div class="text-center mt-3"><a href="logout.php" class="buy-tickets">Logout</a></div>
          </form>
        </div>

      </div>
    </section>
        </form>
    </div>
</body>
</html>