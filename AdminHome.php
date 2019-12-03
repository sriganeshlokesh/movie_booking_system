<?php
  error_reporting(E_ALL);    
  session_start();
    ?>



<!DOCTYPE html>
<html>
<style>
    body{
            background-image: url('Movies.jpg');
        }
      html { overflow-y: scroll; }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
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
  font-size: 18px;
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

span.psw {
    float: right;
    padding-top: 16px;
}


</style>
<body>
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 25%; right:35%">
    <form action="AdminOpPage.php" method ="post">
<!--        <h1><input type="submit" name="submit1" value="Add or Delete Movies"></h1>-->
<button onclick="document.getElementById('id01').style.display='block'" class="button2" style="width:350px; height: 50px; border-radius: 15px; position: absolute; top: 60%; left: 38%"><a href="AdminOpPage.php"  style="text-decoration: none;color: White;">Add or Delete Movies</a></button>
</form>
   <button onclick="document.getElementById('id02').style.display='block'" class="button2" style="width:350px; height: 50px; border-radius: 15px; position: absolute;top: 70%; left: 38%"><a href="BookingLog.php" style="text-decoration:none;color:white;">Booking Log</a></button>
    
    <form action="LogOut.php">
    <input type="submit" value="Logout" class="button3"/>
</form>
    </body>
</html> 