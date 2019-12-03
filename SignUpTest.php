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
    width: 40%;
    height: 3.5%;
    position: absolute;
    left: 52%;
    top: 84%;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    border-radius: 10px;
}
    .signupbtn{
        width:50%;
    }

/* Add padding to container elements */
.container {
    padding: 16px;
    position: absolute;
    top: 40%;
    width: 800px;
    left: 22%;
    color: white;
    
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
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
    echo 'alert("Account Failed")';
    echo '</script>';
}

  }

?>

<img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 10%; right:35%">
    
<form action="SignUpTest.php" style="border:1px solid #ccc" method="post">
    <div class="container">
    <label id="first">Name:</label><br/>
<input type="text" class="form-control" placeholder="Name" name="name" required><br/>
      
<label id="first"> User ID:</label><br/>
<input type="text" class="form-control" placeholder="User ID" name="userid" required><br/>

<label id="first">Password:</label><br/>
<input type="password" class="form-control" placeholder="Password" name="password" required><br/>


<label id="first">Email:</label><br/>
<input type="text" class="form-control" placeholder="Email" name="email" required><br/>
    
<label id="first">Phone Number:</label><br/>
<input type="number" class="form-control" placeholder="Phone" name="phone" required><br/>

      
      <button type="submit" class="signupbtn" name="Submit">Submit</button>
       <center> <a href="CreditCard.php" class="cancelbtn" role="button" style="text-decoration=none; height:49px; width:370px;position:absolute;top:85%;color:white;">Next</a></center>
    </div>
</form>
</body>
</html>

