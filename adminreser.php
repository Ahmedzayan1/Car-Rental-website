<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin'])){
   echo "<script>location.replace('login.php');</script>";
}
?>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Reservations</title>
   <!-- basic -->
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
table {
            margin: 0 auto;
            font-size: large;

            border: 1px solid black;
        }
 
h1 {
            text-align: center;
            color: black;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
td {
            background-color: #d3d3d3;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: bold;
        }
    </style>

</head>

</head>
<body>
    
	         <!-- header -->
            <header>
                 <!-- header inner -->
                 <div  class="header">
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
     <form style="background-color: black;" name="myform" action='#'  method='post' >

        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <td style="background-color:white; border-top-left-radius: 50px">Customer</td>
                <td style="background-color:white;" >Car</td>
                <td style="background-color:white; border-top-right-radius: 50px">Reservation</td>
            </tr>
            <tr>
               <div style="background-color:white;">
            <td style="background-color:white; border-bottom-left-radius: 50px">First name<br><input class="contactus" placeholder="first name" type="text" name="fname"><br>
            Last name<br><input class="contactus" placeholder="last name" type="text" name="lname"><br>
            SSN<br><input class="contactus" placeholder="ssn" type="text" name="ssn"><br>
            License number<br><input class="contactus" placeholder="license number" type="text" name="lnumber"><br>
            Age<br><input class="contactus" placeholder="age" type="text" name="age"><br>
            email<br><input class="contactus" placeholder="email" type="email" name="email">
            </td>

            <td style="background-color:white;">Plate ID<br><input class="contactus" placeholder="plate id" type="text" name="plate_id"><br>
            Car type<br><input class="contactus" placeholder="car type" type="text" name="type"><br>
            Model year<br><input class="contactus" placeholder="model year" type="text" name="year"><br>
            Model<br><input class="contactus" placeholder="model" type="text" name="model"><br>
            Price<br><input class="contactus" placeholder="price" type="text" name="price"><br>
            Color<br><input class="contactus" placeholder="color" type="text" name="color"><br>
            Office ID<br><input class="contactus" placeholder="office id" type="text" name="office_id">
            </td>

            <td style="background-color:white; border-bottom-right-radius: 50px;">Start Date<br><input class="contactus" type="date" name="start_date"><br>
            End Date<br><input class="contactus" type="date" name="end_date"><br>
            Payment done?<br><select name="payment" required>
                                    <option value="0">Don't care</option>
                                    <option value="1">yes</option>
                                    <option value="2">no</option>
            </select>
            </td>
            </tr>
        </table></div>
        <center><input  style=" 
    background-color:#ffd900;

    color:black;
text-align: center;
border-color: transparent;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;" type="submit" name="submit" value="Search" ></center>
		</form>
        <?php
if(isset($_POST['submit'])){
$lname=$_POST['lname'];
$ssn=$_POST['ssn'];
$fname=$_POST['fname'];
$lnumber=$_POST['lnumber'];
$age=$_POST['age'];
$email=$_POST['email'];
$plate_id=$_POST['plate_id'];
$type=$_post['type'];
$year=$_POST['year'];
$model=$_POST['model'];
$color=$_POST['color'];
$price=$_POST['price'];
$office_id=$_post['office_id'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];
$payment = $_POST['payment'];
$_SESSION["fname"] = "$fname";
$_SESSION["lname"] = "$lname";
$_SESSION["lnumber"] = "$lnumber";
$_SESSION["age"] = "$age";
$_SESSION["email"] = "$email";
$_SESSION["start"] = "$start";
$_SESSION["end"] = "$end";
$_SESSION["plate_id"] = "$plate_id";
$_SESSION["office_id"] = "$office_id";
$_SESSION["type"] = "$type";
$_SESSION["year"] = "$year";
$_SESSION["model"] = "$model";
$_SESSION["price"] = "$price";
$_SESSION["color"] = "$color";
$_SESSION["payment"] = "$payment";
$_SESSION["ssn"] = "$ssn";

echo "<script> location.replace('adminsearch.php') </script>";
}
?>
</body>
</html>