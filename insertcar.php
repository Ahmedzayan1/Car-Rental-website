<?php
session_start();
if(!isset($_SESSION['admin'])){
  echo "<script>location.replace('login.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>7
    <title>Car</title>
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
    height: 710px;
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
	var plate = document.forms["myform"]["plate"].value;
	var model = document.forms["myform"]["model"].value;
	var year = document.forms["myform"]["year"].value;
	var hp = document.forms["myform"]["hp"].value;
	var cc = document.forms["myform"]["cc"].value;
	var image = document.forms["myform"]["image"].value;
	var price = document.forms["myform"]["price"].value;
	var type = document.forms["myform"]["type"].value;
	var color = document.forms["myform"]["color"].value;
	var office = document.forms["myform"]["office"].value;
	var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if(plate == ""){
		alert("plate id empty")
		return false;
	}
	if(model == ""){
		alert("car model empty ")
		return false;
	}
	if(year == ""){
		alert("year is empty")
		return false;
	}
	if(hp == ""){
		alert("hoursepower is empty")
		return false;
	}
	if(cc == ""){
		alert("cc is empty")
		return false;
	}
	if(image == ""){
		alert("please upload image")
		return false;
	}
	if(price == ""){
		alert("pasword is empty")
		return false;
	}
	if(type == ""){
		alert("type is empty")
		return false;
	}
	if(office == ""){
		alert("office id is empty")
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
        <h3>Insert car</h3>

        <tr>
          <td>plate ID:</td>
          <td><input  type="text" name="plate" placeholder="Enter car's plate id"></td>
        </tr>
         <tr>
          <td>model:</td>
          <td><input type="text" name="model"  placeholder="Enter car's model"></td>
        </tr>
         <tr>
          <td>year:</td>
          <td><input type="text" name="year"  placeholder="Enter car's year"></td>
        </tr>
         <tr>
          <td>type:</td>
          <td><input type="text" name="type"  placeholder="Enter car's type"></td>
        </tr>
       
         <tr>
          <td>price per day:</td>
          <td><input type="text" name="price"  placeholder="Enter car's price"></td>
        </tr>
         <tr>
          <td>color:</td>
          <td><input type="text" name="color"  placeholder="Enter car's color"></td>
        </tr>
        <tr>
          <td>cc:</td>
          <td><input type="text" name="cc" placeholder="Enter cc"></td>
        </tr>
        <tr>
          <td>hoursepower:</td>
          <td><input type="text" name="hp" placeholder="enter car's hp"></td>
        </tr>
		<tr>
          <td>office id:</td>
          <td><input type="text" name="office" placeholder="enter car's office"></td>
        </tr>
		<tr>
          <td>image:</td>
          <td><input type="file" name="my_image" ></td>
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
$plate = ($_POST['plate']);
$model = ($_POST['model']);
$year = ($_POST['year']);
$type = ($_POST['type']);
$cc = ($_POST['cc']);
$hp = ($_POST['hp']);
$color = ($_POST['color']);
$office = ($_POST['office']);
$price = ($_POST['price']);
$my_image = ($_POST['my_image']);

$sql = "INSERT INTO car (plate_id,model,year,type,price,color,hp,cc,image,office_id) VALUES ('$plate','$model','$year','$type','$price','$color','$hp','$cc','$my_image','$office') ";  
      
//to prevent from mysqli injection  
$exists = mysqli_query($conn, "SELECT * FROM car WHERE plate_id = '". $_POST['plate']."' " );  
if (mysqli_num_rows($exists))
  {
	echo "<script> alert('This plate id already exists');
	window.location.replace('insertcar.php');
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