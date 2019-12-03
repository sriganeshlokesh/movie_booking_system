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
$thid=0;
  if(isset($_POST['Submit']))
{
      echo $thid+1;
      
    $_SESSION['thid']=$thid;
    $sql = "INSERT INTO theatre (thid, price, thname)
    VALUES
    ('".$thid."','".$_POST["price"]."','".$_POST["thname"]."');";
    
    if ($conn->query($sql) == TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Theatre entered")';    
    echo 'window.location.href= "Book.php";';
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Failed")';
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


<html>
<!DOCTYPE html>


<html>
    <head>
<style>
    
    .form-group{
        position: relative;
        left: -10%;
        top: 30%;
    }
    body{
/*            background-image: url('Images/Movies.jpg');*/
            
        }
    
     .button3 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:red;
  border: none;
  border-radius: 15px;
        position: absolute;
        top: 5%;
        left: 3%;
}
</style>
</head>  
<body>    
<!--<img src="Images/Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:35%">-->

<div class="form-group col-xs-5 col-sm-5 col-md-5col-md-5 col-lg-5  col-sm-offset-5 well offset5">

<form action="theatre.php" method="post"> 

  <label id="first">Rates</label><br/>
  <input type="checkbox" name="price" value="100"> 100&nbsp;
  <input type="checkbox" name="price" value="210"> 200&nbsp;
    <input type="checkbox" name="price" value="350"> 350&nbsp;</br>
    
    <label id="first">Theatre Name:</label><br/>
    <input list="thname" name="thname"><br/>    
    <datalist id="thname" size="4" multiple><br/ >
  <option value="PVR Orion Mall">PVR Orion Mall</option>
  <option value="Inox Mantri Square">Inox Mantri Square</option>
  <option value="Inox Garuda Mall">Inox Garuda Mall</option>
  <option value="PVR Forum Mall">PVR Forum Mall</option>
  <option value="Urvashi Theatre">Urvashi Theatre</option>
  <option value="The Cinema GT World Mall">The Cinema GT World Mall</option>
</datalist><br/>
<br/> 
    
</form>
    
    </div>
    <form action="Book.php">
    <input type="submit" value="Next" class="button3"/>
</form>
</body>
</html>