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
<?php

  if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO creditcard (cname, cnum, ctype, expdate, cvv)
    VALUES ('".$_POST["cname"]."','".$_POST["cnum"]."','".$_POST["ctype"]."','".$_POST["expdate"]."','".$_POST["cvv"]."')";

    if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Credit info entered successfully")';      
    echo '</script>';
} else {
    echo '<script language="javascript">';    
    echo 'alert("Credit info Entered is incorrect")';
    echo '</script>';
}

  }

?>
<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body{
            background-image: url('Movies.jpg');
        }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
    border-radius: 10px;
}

/* Add padding to container elements */
.container {
    padding: 10px;
    width: 60%;
    background-color:white;
    position: absolute;
    top:30%;
    left:20%;
    border-radius: 10px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both
}

/* Change styles for cancel button and signup button on extra small screens */


}
    div1 {
    width: 150px;
    height: 150px;
    overflow: visible;
}
</style>
    </head>
<body>

<img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:35%">

<form action="index.php" method="post">
  <div class="container">
    <label><b>Name On Credit Card</b></label>
    <input type="text" placeholder="Name On Credit Card" name="cname" required>
      <label><b>Card Number</b></label>
    <input type="number" placeholder="Card Number" name="cnum" required>

      <br>
      <br>
    <label id="first">Credit Card Type:</label><br/>
<input type="text" class="form-control" placeholder="Type" name="ctype" required><br/>
      
      <label id="first">Credit Card Expiry Date:</label><br/>
<input type="date" class="form-control" placeholder="Date" name="expdate" required><br/>
      <label><b>CVV</b></label>
    <input type="password" placeholder="Card Verification Number" name="cvv" required>
      
      
    
      <button type="button" class="cancelbtn" ><a href="index.php"  style="color:white">Cancel</a></button>
      <button type="submit" class="signupbtn" name="Submit">SignUp</button>
  </div>
</form>
    
</body>
</html>
