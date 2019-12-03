
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
       float: none; 
    }
    .cancelbtn {
       width: 100%;
    }

</style>
<body>
    <?php
 if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO movies (movid, movname, rating, movinfo, movpic)
    VALUES ('".$_POST["movieid"]."','".$_POST["mname"]."','".$_POST["movrate"]."','".$_POST["minfo"]."','".$_POST["movimgurl"]."')";

    if($mysqli->query($sql) === true) {
    echo '<script language="javascript">';
    echo 'alert("Movie Added")';      
    echo '</script>';
} else {
    echo '<script language="javascript">';    
    echo 'alert("Error")';
    echo '</script>';
}

  }

?>
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 25%; right:35%">
<button onclick="document.getElementById('id01').style.display='block'" class="button2" style="width:350px; height: 50px; border-radius: 15px; position: absolute; top: 60%; left: 38%">Insert</button>

   <button onclick="document.getElementById('id02').style.display='block'" class="button2" style="width:350px; height: 50px; border-radius: 15px; position: absolute;top: 70%; left: 38%">Delete</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="SignUp.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="Showtime.png" alt="Avatar" class="avatar">
    </div>  

    <div class="container">
      <label><b>Movie ID</b></label>
      <input type="text" placeholder="Enter MovieID" name="movieid" required style="border-radius: 10px">

      <label><b>Movie Name</b></label>
      <input type="text" placeholder="Enter Movie Name" id="myInput" name="mname" required style="border-radius: 10px">
        <br>
         <label><b>Movie Rating</b></label>
        <input type="text" placeholder="Enter Movie Rating" id="myInput" name="movrate" required style="border-radius: 10px">
      
        <br>
        <br>
         <label><b>Movie Info</b></label>
      <input type="text" placeholder="Enter Movie Info" id="myInput" name="minfo" required style="border-radius: 10px;width: 400px;height:100px">
        <br>
        
  <label><b>Movie Image</b></label>
        <input type="text" placeholder="Enter Movie ImgURL" id="myInput" name="movimgurl" required style="border-radius: 10px">
           
      <button type="submit" name="Submit" style="border-radius: 10px; position: absolute;top: 60%; left:70%">Submit</button>
    </div>

  </form>
    </div>
    <div id="id02" class="modal">
  
  <form class="modal-content2 animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
      <img src="Media/Showtime.png" alt="Avatar" class="avatar">
    </div>
<center>
    <div class="container">
        <h2>Delete Movie</h2>
      <label><b>MovieID</b></label>
       <select>
  <option value="1">1</option>
  <option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
 <option value="5">5</option>
</select>
        
      <button type="submit" name="submit1"style="border-radius: 10px; position: absolute;top:55%;left:46%">Submit</button>
    </div>
    </center>
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
    
</body>
</html>
