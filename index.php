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
    $check_userid = "";
    $check_password = "";
    if(isset($_POST['Submit']))
    {
        $userid = $_POST["userid"]; 
        $password = $_POST["password"];
        

        $result2 = mysqli_query($conn,"SELECT uid, password FROM user WHERE uid = '".$userid."' AND  password = '".$password."'");

        while($row=mysqli_fetch_assoc($result2))
        {
        $check_userid = $row['uid'];
        $check_password=$row['password'];
            
        }

        if($userid == $check_userid && $password == $check_password){
            
        
            $_SESSION['username'] = $userid;
        echo '<script language="javascript">';
        echo 'alert("Login Success");'; 
        echo 'window.location.href= "carousal.php";';  
        echo '</script>';
        }

        else{
        echo '<script language="javascript">';
        echo 'alert("Login Failed")'; 
        echo 'window.location.href= "SignUp.php";'; 
        echo '</script>';
  
        }
    }

    if(isset($_POST['sbmt']))
    {
        $adminid = $_POST["adminid"]; 
        $pswd = $_POST["pswd"]; 

        $result1 = mysqli_query($conn,"SELECT adminid, adminpass FROM admin WHERE adminid = '".$adminid."' AND  adminpass = '".$pswd."'");

        while($row=mysqli_fetch_assoc($result1))
        {
        $check_adminid=$row['adminid'];
        $check_password=$row['adminpass'];
        }

        if($adminid == $check_adminid && $pswd == $check_password){
        
        echo '<script language="javascript">';
        echo 'alert("Login Success");'; 
        echo 'window.location.href= "AdminHome.php";';
        echo '</script>';
        }

        else{
        echo '<script language="javascript">';
        echo 'alert("Login Failed")';    
        echo 'window.location.href= "LoginPage.php";';    
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
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    /* to change the style of the text inside the input box */
}

/* Set a style for all buttons */
button {
    background-color: red;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    font-family: serif;
    
    /* to change the style of all the buttons used in the model context box*/
}
   .button2 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:red;
  border: none;
  border-radius: 15px;
}

.button2:hover {background-color: darkred}

.button2:active {
  background-color: red;
  transform: translateY(4px);
}
     .button3 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:red;
  border: none;
  border-radius: 15px;
}

.button3:hover {background-color: darkred}

.button3:active {
  background-color: red;
  transform: translateY(4px);
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    border-radius:10px;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 0;
}

.container {
    padding: 16px;
    border-radius: 10px;

}
    .container1 {
    padding: 16px;
    border-radius: 10px;
            width: 80%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* (Modal Content/Box) the box which appears on the screen when we press login button */
.modal-content {
    background-color:whitesmoke;
    margin:auto; /* 5% from the top, 15% from the bottom and centered */
    border:0;
    width:60%;/* Could be more or less, depending on screen size */
    border-radius: 15px;
    }
    .modal-content2 {
    background-color:whitesmoke;
    margin:auto; /* 5% from the top, 15% from the bottom and centered */
    border:0;
    width:50%;/* Could be more or less, depending on screen size */
    height: 60%;
    border-radius: 15px;
    }
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
/* the exit symbol to remove the pop up*/
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: left; 
        
    }
    .cancelbtn {
       width: 100%;
    }
}
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: darkred;
   color: white;
   text-align: center;
        opacity:inherit;
}
</style>
         </head>
<body>
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 25%; right:35%">
<button onclick="document.getElementById('id01').style.display='block'" class="button2" style="width:350px; height: 50px; border-radius: 20px; position: absolute; top: 60%; left: 38%">Login</button>

   <button onclick="document.getElementById('id02').style.display='block'" class="button3" style="width:100px; height: 50px; border-radius: 15px; position: absolute; top: 5%; left: 90%">Admin</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="Showtime.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Userid</b></label>
      <input type="text" placeholder="Enter Userid" name="userid" required style="border-radius: 10px">
        <br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required style="border-radius: 10px">
        
      <button type="Submit" name="Submit" style="border-radius: 10px; position: absolute;top:55%;left:80%">Login</button>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Create Account<br><a base href="SignUpTest.php">Signup?</a></span>
        <!-- add the url to the singup page in the href attribute -->
    </div>
  </form>
</div>
    <div id="id02" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
      <img src="Showtime.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label><b>AdminID</b></label>
      <input name="adminid" required type="text" placeholder="Enter AdminID" style="border-radius: 10px">
        <br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="myInput1" name="pswd" required style="border-radius: 10px">
        
      <button type="submit" name="sbmt" style="border-radius: 10px; position: absolute;top:74%;left:83%">Login</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
    var modal=document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    function myFunction() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
    
<div class="footer">
  <p>© 2017 SriGanesh Lokesh</p>
    <p>All Rights Reserved</p>
</div>
</body>
</html>
