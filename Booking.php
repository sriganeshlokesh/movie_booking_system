<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "welcome";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 

//if(!isset($_SESSION['username'])){
//    echo '<script language="javascript">';
//    echo 'alert("Login bitch");'; 
//    echo 'window.location.href= "index.php";';  
//    echo '</script>';
////    header('location: index.php')
    
    $tid=0;
    $mid=0;
    $userid=0;
    $bid=0;
  if(isset($_POST['Submit']))
{
    
    $tid=$_SESSION['tid'];
    $bid+=1;
    $userid=$_SESSION['username'];
    $mid=$_SESSION['mid'];
    $checkBox = implode(',', $_POST['seats']);

    $sql = "INSERT INTO booking (bid, date, time, userid, mid, tid, seats)
    VALUES ('".$bid."','".$_POST["date"]."','".$_POST["time"]."','".$userid."','".$mid."','".$tid."','".$checkBox."');";

    if ($conn->query($sql) == TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Ticket booked successfully")';      
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Ticket not booked")';
    echo '</script>';
}

  }

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    

   input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
    }
    
    body{
            background-image: url('Images/Movies.jpg');
        }
    
    
    
    .form-group{
        position: absolute;
        left: -10%;
        top: 10%;
    }
    
    
</style>
</head>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>SignUp</title>
    
</head>
<body>
<center>
<!--
    <div class="form-group col-xs-6 col-sm-6 col-md-2col-md-3 col-lg-2 col-sm-offset-5 well offset4">
-->

    <div class="form-group col-xs-5 col-sm-5 col-md-5col-md-5 col-lg-5  col-sm-offset-5 well offset5">
<form action="Booking.php" method="post"> 

      
<label id="first"> Date</label><br/>
<input type="date" class="form-control" placeholder="Date" name="date"><br/>
  
    <label id="first">Time</label><br/>
    <input list="time" name="time"><br/>    
    <datalist id="time" size="4" multiple><br/ >
  <option value="08:30">08:30</option>
  <option value="10:00">10:00</option>
  <option value="12:45">12:45</option>
  <option value="13:30">01:30</option>
  <option value="15:30">03:30</option>
  <option value="18:00">06:00</option>
  <option value="19:30">07:30</option>
  <option value="22:00">10:00</option>
</datalist><br/>
    
  <label id="first">Seats</label><br/>
  <input type="checkbox" name="seats[]" value="A1"> A1&nbsp;
  <input type="checkbox" name="seats[]" value="A2"> A2&nbsp;
  <input type="checkbox" name="seats[]" value="A3"> A3&nbsp;
  <input type="checkbox" name="seats[]" value="A4"> A4&nbsp;
  <input type="checkbox" name="seats[]" value="A5"> A5&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="seats[]" value="A6"> A6&nbsp;
  <input type="checkbox" name="seats[]" value="A7"> A7&nbsp;
  <input type="checkbox" name="seats[]" value="A8"> A8&nbsp;
  <input type="checkbox" name="seats[]" value="A9"> A9&nbsp;
  <input type="checkbox" name="seats[]" value="A10">A10</br></br>
  <input type="checkbox" name="seats[]" value="B1"> B1&nbsp;
  <input type="checkbox" name="seats[]" value="B2"> B2&nbsp;
  <input type="checkbox" name="seats[]" value="B3"> B3&nbsp;
  <input type="checkbox" name="seats[]" value="B4"> B4&nbsp;
  <input type="checkbox" name="seats[]" value="B5"> B5&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="seats[]" value="B6"> B6&nbsp;
  <input type="checkbox" name="seats[]" value="B7"> B7&nbsp;
  <input type="checkbox" name="seats[]" value="B8"> B8&nbsp;
  <input type="checkbox" name="seats[]" value="B9"> B9&nbsp;
  <input type="checkbox" name="seats[]" value="B10">B10</br></br>
  <input type="checkbox" name="seats[]" value="C1"> C1&nbsp;
  <input type="checkbox" name="seats[]" value="C2"> C2&nbsp;
  <input type="checkbox" name="seats[]" value="C3"> C3&nbsp;
  <input type="checkbox" name="seats[]" value="C4"> C4&nbsp;
  <input type="checkbox" name="seats[]" value="C5"> C5&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="seats[]" value="C6"> C6&nbsp;
  <input type="checkbox" name="seats[]" value="C7"> C7&nbsp;
  <input type="checkbox" name="seats[]" value="C8"> C8&nbsp;
  <input type="checkbox" name="seats[]" value="C9"> C9&nbsp;
  <input type="checkbox" name="seats[]" value="C10">C10</br></br>
  <input type="checkbox" name="seats[]" value="D1"> D1&nbsp;
  <input type="checkbox" name="seats[]" value="D2"> D2&nbsp;
  <input type="checkbox" name="seats[]" value="D3"> D3&nbsp;
  <input type="checkbox" name="seats[]" value="D4"> D4&nbsp;
  <input type="checkbox" name="seats[]" value="D5">D5
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="seats[]" value="D6"> D6&nbsp;
  <input type="checkbox" name="seats[]" value="D7"> D7&nbsp;
  <input type="checkbox" name="seats[]" value="D8"> D8&nbsp;
  <input type="checkbox" name="seats[]" value="D9"> D9&nbsp;
  <input type="checkbox" name="seats[]" value="D10">D10</br></br>
  <input type="checkbox" name="seats[]" value="E1"> E1&nbsp;
  <input type="checkbox" name="seats[]" value="E2"> E2&nbsp;
  <input type="checkbox" name="seats[]" value="E3"> E3&nbsp;
  <input type="checkbox" name="seats[]" value="E4"> E4&nbsp;
  <input type="checkbox" name="seats[]" value="E5"> E5&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="seats[]" value="E6"> E6&nbsp;
  <input type="checkbox" name="seats[]" value="E7"> E7&nbsp;
  <input type="checkbox" name="seats[]" value="E8"> E8&nbsp;
  <input type="checkbox" name="seats[]" value="E9"> E9&nbsp;
  <input type="checkbox" name="seats[]" value="E10">E10</br>      
    
</br><button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
    
</center>  
</div>

</form>
</body>
</html>