<?php
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
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Credit Sign Up</title>


</head>
<body>

<?php

  if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO account (name, userid, password, email, phone)
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

<label id="first">Credit card name:</label><br/>
<input type="text" class="form-control" placeholder="Name" name="cname"><br/>
      
<label id="first"> Credit Card number:</label><br/>
<input type="number" class="form-control" placeholder="Credit Card Number" name="cno"><br/>

<label id="first">Credit Card Type:</label><br/>
<input type="text" class="form-control" placeholder="Type" name="ctype"><br/>


<label id="first">Credit Card Expiry Date:</label><br/>
<input type="text" class="form-control" placeholder="Date" name="cexp"><br/>
    
<label id="first">CVV:</label><br/>
<input type="number" class="form-control" placeholder="CVV" name="cvv"><br/>
        
<button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
    
    
</div>
</center>        

</form>
</body>
</html>    