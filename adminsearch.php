<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin'])){
    echo "<script>location.replace('login.php');</script>";
 }
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
$done="Done";
$waiting="waiting";
$fname=$_SESSION["fname"] ;
$lname=$_SESSION["lname"] ;
$ssn=$_SESSION["ssn"] ;
$lnumber=$_SESSION["lnumber"] ;
$age=$_SESSION["age"] ;
$email=$_SESSION["email"] ;
$start=$_SESSION["start"] ;
$end=$_SESSION["end"] ;
$plate_id=$_SESSION["plate_id"] ;
$office_id=$_SESSION["office_id"] ;
$type=$_SESSION["type"] ;
$year=$_SESSION["year"] ;
$model=$_SESSION["model"] ;
$price=$_SESSION["price"] ;
$color=$_SESSION["color"] ;
$payment=$_SESSION["payment"] ;
$office_id_s="office_id";
$fname_s="firstname";
$lname_s="lastname";
$lnumber_s="lnumber";
$age_s="age";
$email_s="email";
$start_s="reservation_date";
$end_s="return_date";
$plate_id_s="plate_id";
$type_s="type";
$model_s="model";
$year_s="year";
$color_s="color";
$price_s="price";
$payment_s="payment";
$ssn_s="ssn";
if($fname=="")
{
    $fname=0;
    $fname_s=0;
}
if($lname=="")
{
    $lname=0;
    $lname_s=0;
}
if($lnumber=="")
{
    $lnumber=0;
    $lnumber_s=0;
}
if($ssn=="")
{
    $ssn=0;
    $ssn_s=0;
}
if($age=="")
{
    $age=0;
    $age_s=0;
}
if($email=="")
{
    $email=0;
    $email_s=0;
}
if($start=="")
{
    $start=0;
    $start_s=0;
}
if($end=="")
{
    $end=0;
    $end_s=0;
}
if($plate_id=="")
{
    $plate_id=0;
    $plate_id_s=0;
}
if($office_id=="")
{
    $office_id=0;
    $office_id_s=0;
}
if($type=="")
{
    $type=0;
    $type_s=0;
}
if($model=="")
{
    $model=0;
    $model_s=0;
}
if($year=="")
{
    $year=0;
    $year_s=0;
}
if($color=="")
{
    $color=0;
    $color_s=0;
}
if($price=="")
{
    $price=0;
    $price_s=0;
}
if($payment==0)
{
    $payment_id=0;
    $payment_s=0;
}
if($payment==0)
{
    $payment=0;
}

$sql = " SELECT * FROM customer natural join reservation natural join car 
where $fname_s='$fname' and $lname_s='$lname' and $lnumber_s='$lnumber'
and $age_s='$age' and $email_s='$email_s' and $ssn='$ssn_s'
and $plate_id_s='$plate_id' and $type_s = '$type_s' and $color_s='$color'
and $price_s='$price' and $year_s='$year' and $office_id_s='$office_id' and $model_s LIKE '$model%'
and $payment_s='$payment' and $end_s>='$start' and $start_s<='$end'  ";
$result = $conn->query($sql);
$conn->close();
?>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Reserrvations</title>
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
     <form name="myform" action='#'  method='post' >
        <h1>Reservations</h1>

        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>ssn</th>
                <th>License Number</th>
                <th>Age</th>
                <th>plate ID</th>
                <th>Type</th>
                <th>Model</th>
                <th>Model year</th>
                <th>HP</th>
                <th>CC</th>
                <th>color</th>
                <th>Office ID</th>
                <th>Reservation Date</th>
                <th>Return Date</th>
                <th>Payment</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['lastname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['ssn'];?></td>
                <td><?php echo $rows['lnumber'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['plate_id'];?></td>
                <td><?php echo $rows['type'];?></td>
                <td><?php echo $rows['model'];?></td>
                <td><?php echo $rows['year'];?></td>
                <td><?php echo $rows['hp'];?></td>
                <td><?php echo $rows['cc'];?></td>
                <td><?php echo $rows['color'];?></td>
                <td><?php echo $rows['office_id'];?></td>
                <td><?php echo $rows['reservation_date'];?></td>
                <td><?php echo $rows['return_date'];?></td>
                <td><?php if($rows['payment']==1)echo $done ;else echo $waiting;?></td>
            </tr>
            <?php
                }
            ?>
        </table>
		</form>

</body>
</html>