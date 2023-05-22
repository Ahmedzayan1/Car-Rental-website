<?php
session_start();
if(!isset($_SESSION['admin'])){
  echo "<script>location.replace('login.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Office</title>
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
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 500px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
td{
	color: #F8F8FF
}
input{
    display: block;
    height: 27px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
	<script>
function validateForm(){
	var office_id = document.forms["myform"]["office_id"].value;
	var address = document.forms["myform"]["address"].value;
	var country = document.forms["myform"]["country"].value;
	var city = document.forms["myform"]["city"].value;
	var phone = document.forms["myform"]["phone"].value;
	var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;

	if(office_id == ""){
		alert("office id is empty")
		return false;
	}
	if(address == ""){
		alert("address is empty")
		return false;
	}
	if(country == ""){
		alert("country is empty")
		return false;
	}
	if(city == ""){
		alert("city is empty")
		return false;
	}
	if(phone == ""){
		alert("phone is empty")
		return false;
	}
	
	
}
</script>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
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
     <form name="myform" action='#'  onsubmit="return validateForm()" method='post' >
        <h3>Insert office</h3>

        <tr>
          <td>office id:</td>
          <td><input  type="text" name="office_id" placeholder="Enter office id"></td>
        </tr>
         <tr>
          <td>address:</td>
          <td><input type="text" name="address"  placeholder="Enter office addres"></td>
        </tr>
         <tr>
          <td>country:</td>
          <td><input type="text" name="country"  placeholder="Enter country"></td>
        </tr>
         <tr>
          <td>city:</td>
          <td><input type="text" name="city"  placeholder="Enter city"></td>
        </tr>
       
         <tr>
          <td>phone:</td>
          <td><input type="text" name="phone"  placeholder="Enter phone"></td>
        </tr>
        

		<tr>
           <td><input type="submit" name="submit" value="Confirm"  ></td>
        </tr>    
		</form>
<?php
if(isset($_POST['submit'])){
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
$office_id = ($_POST['office_id']);
$address = ($_POST['address']);
$country = ($_POST['country']);
$city = ($_POST['city']);
$phone = ($_POST['phone']);
$sql = "INSERT INTO office (office_id,address,country,city,phone) VALUES ('$office_id','$address','$country','$city','$phone') ";  
      
//to prevent from mysqli injection  
$exists = mysqli_query($conn, "SELECT * FROM office WHERE office_id = '". $_POST['office_id']."' ");  
if (mysqli_num_rows($exists))
  {
	echo "<script> alert('This office id already exists');
	window.location.replace('insertoffice.php');
	 </script>";
  }
else if ($conn->query($sql) === TRUE) {
  echo"<script>
  alet('Insertion Done');
  </script>)";
}


$conn->close();
}
?>
</body>
</html>