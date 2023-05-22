<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>

    <title>Register</title>
  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
    <!--        -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    background-image: url('images/logo.png');
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
    height: 710px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 60%;
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
input{
    color: black;
    display: block;
    height: 50px;
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
	var password = document.forms["myform"]["pwd"].value;
    var ssn = document.forms["myform"]["ssn"].value;
    var lnumber = document.forms["myform"]["lnumber"].value;
	var confirm_password = document.forms["myform"]["pwd1"].value;
	if(confirm_password != password){
		alert("passwords don't match")
		return false;
	}
    if(ssn.length < 10){
		alert("please enter valid national id")
		return false;
	}
    if(lnumber.length < 7){
		alert("please enter valid license number")
		return false;
	}
}
</script>
</head>
<body style="background-image: url(images/bg.jpg);">
    <div style="background-color: yellow;">
     
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
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
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
                                 <a class="nav-link" href="index.php"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact us</a>
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
        <h3>Registeration</h3>

        <tr>
          <td style=" 
    background-color: white;
    color:black;

    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

.">ssn:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="number" name="ssn" min="0" placeholder="Enter your national ID number" required></td>
        </tr>
         <tr>
          <td>firstname:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="text" name="fname"  placeholder="Enter first name Here" required></td>
        </tr>
         <tr>
          <td>lastname:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="text" name="lname"  placeholder="Enter last name Here" required></td>
        </tr>
         <tr>
          <td>Email:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="Email" name="email"  placeholder="Enter Email Here" required></td>
        </tr>
       
         <tr>
          <td>age:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="number" name="age" min="18"  placeholder="Enter age Here" required></td>
        </tr>
         <tr>
          <td>license number:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="number" name="lnumber" min="0"  placeholder="Enter license number Here" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="password" name="pwd" pattern=".{8,}" placeholder="pw must be at least 8 characters" required></td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input  style=" 
    background-color: white;
    color:black;
height: 30px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 700px;
    cursor: pointer;

." type="password" name="pwd1" placeholder="Confirm password" required></td>
        </tr>

		<tr>
           <td><input   style=" margin-top: 20px;
    width: 100%;
    height: 10%;
    background-color: #ffd900;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 100px;
    cursor: pointer;
    border-color: transparent;
." type="submit" name="submit" value="Register"  ></td>
           <td><p>Already a user? <a href="login.php">Login Here</a></p></td>
        </tr>    </form>
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
$ssn = ($_POST['ssn']);
$fn = ($_POST['fname']);
$ln = ($_POST['lname']);
$lnumber = ($_POST['lnumber']);
$age = ($_POST['age']);
$e = ($_POST['email']);
$pw = ($_POST['pwd']);
$sql = "INSERT INTO customer (ssn,firstname,lastname,age,lnumber,email,password) VALUES ('$ssn','$fn','$ln','$age','$lnumber','$e',MD5('$pw')) ";  
      
//to prevent from mysqli injection  
$exists = mysqli_query($conn, "SELECT * FROM customer WHERE email = '". $_POST['email']."' or ssn= '". $_POST['ssn']."'" );  
if (mysqli_num_rows($exists))
  {
	echo "<script> alert('This email or ssn already exists');
	window.location.replace('registeration.php');
	 </script>";
  }
else {
  $_SESSION["fname"] = "$fn";
$_SESSION["ssn"] = "$ssn";
    $conn->query($sql);
  echo"<script>
  window.location.replace('index1.php');
  </script>)";
}


$conn->close();
}
?>
</body>
</html>