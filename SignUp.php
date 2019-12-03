<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Users/sriganesh/Documents/Movie Booking System/css/bootstrap.min.css">
<script src="/Users/sriganesh/JQuery/jquery.min.js"></script>
<script src="/Users/sriganesh/JQuery/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }

</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "dba123";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
?>
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

 <?php

  if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO user (uname, uid, password, emailid, phno)
    VALUES ('".$_POST["name"]."','".$_POST["userid"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["phone"]."')";

    if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Account created")';      
    echo '</script>';
} else {
    echo '<script language="javascript">';    
    echo 'alert("Account created")';
    echo '</script>';
}

  }

?>
    <center>
<div class="form-group col-xs-6 col-sm-6 col-md-2col-md-3 col-lg-2 col-sm-offset-5 well offset4">
<form action="SignUp.php" method="post"> 

<label id="first">Name:</label><br/>
<input type="text" class="form-control" placeholder="Name" name="name"><br/>
      
<label id="first"> User ID:</label><br/>
<input type="text" class="form-control" placeholder="User ID" name="userid"><br/>

<label id="first">Password:</label><br/>
<input type="password" class="form-control" placeholder="Password" name="password"><br/>


<label id="first">Email:</label><br/>
<input type="text" class="form-control" placeholder="Email" name="email"><br/>
    
<label id="first">Phone Number:</label><br/>
<input type="number" class="form-control" placeholder="Phone" name="phone"><br/>
        
<button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
    
<a href="credit.php" class="btn btn-info" role="button">Next</a>
    
    
    
</div>
</center>        

</form>
</body>
</html>