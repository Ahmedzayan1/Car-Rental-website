<?php
session_start();
if(!isset($_SESSION['admin'])){
   echo "<script>location.replace('login.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
	  <title>Cars</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>rento</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
       end loader -->
       <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="admin.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="admin.php"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="adminreser.php">Reservations</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="retrievecustomer.php">Customers</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="admincar.php">Cars</a>
                              </li>
							         <li class="nav-item">
                                 <a class="nav-link" href="adminoffice.php">Offices</a>
                              </li>
							         <li class="nav-item">
                                 <a class="nav-link" href="adminpayment.php">payments</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <form name="myform" action='#'  method='post' >
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h2 style="color:white;">Please enter car's plate id<input class="contactus" type="text" name="plated_id"></h2>
                     
                      <h1><input type="submit" name="submit" value="Change" ></h1>
                  </div>
               </div>
               <select name="status" required>
                                   <option value="0">Car Status</option>
                                    <option value="0">Active</option>
                                    <option value="1">out of service</option>
                                 </select>
            </div>
         </div>
      </section>
      <form>
      <!-- end banner -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <?php
if(isset($_POST['submit'])){
$plate_id=$_POST['plated_id'];
$status=$_POST['status'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = " update car set out_of_service='$status' where plate_id='$plate_id' ";
$result = $conn->query($sql);
$conn->close();
      echo "<script> alert('car updated successfully');</script>";
      }
      ?>
   </body>
</html>