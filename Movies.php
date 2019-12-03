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
// $mid=$_SESSION['mid'];
//   $uid=$_SESSION['username'];
//echo "movieid=".$mid;
  $sql= "SELECT * FROM movies";
  $result=$conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
{
      $movid=$row["movid"];
      $movname=$row["movname"];
      $rating=$row["rating"];
      $movinfo=$row["movinfo"];
      $movpic=$row["movpic"];
     $_SESSION['movid']=$movid;
      echo "<p>";
      echo $movid," <br><br></b>";
      echo $movname,"<br><br></b>";
      echo "<img src=$movpic height=300 width=700 style=position: relative; left: 56%;><br><br>";
      echo "mrating:",$rating,"/5<br><br>";
      echo $movinfo,"<br><br>";
      echo "</p>";
      echo "</div>";     
 }  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
           background-image: url('Movies.jpg');
        }

p{    position: relative;
    right: 0px;
    bottom: -300px;
    font-size: 20px;
    color: white;
    padding-bottom: 50px;
    padding-left: 30px;
    }
    .bkbtn{
        background-color: red;/* Green */
    border: none;
    color: white;
    border-style: double;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
    .mID{
        text-decoration-color: red;
        color: red;
    }
    
    html { overflow-y: scroll; }
    
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-radius: 10px;
     position:absolute;
    top:30%;
    left: 35%;
    
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: black;
}

.active {
    background-color: red;
}
    .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
        position: absolute;
        top: 5%;
        left: 80%;
}
    .container {
    padding: 10px;
    width: 25%;
    background-color:white;
    position: absolute;
    top:5%;
    left:70%;
    border-radius: 10px;
}
</style>
</head>
<body>
<img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
<ul>
  <li><a  href="carousal.php">Home</a></li>
  <li><a class="active" href="Movies.php">Movies</a></li>
  <li><a href="BookingHistory.php">Booking History</a></li>
<!--  <li><a href="AboutPage.php">About</a></li>-->
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>
    
    <form action="Book.php" method="post">
        <div class="container">
    <label><b>Enter Movie ID</b></label>
    <input type="text" placeholder="Enter Movie ID" name="movid" required>
        <button type="submit" class="signupbtn" name="Submit">Submit</button>
        </div>
    </form>
<!--
    <?php
        if(isset($_POST["submit2"])& !empty($_POST["movid"])){
            $mov = $_POST["movid"];
            $sql= "SELECT * FROM movies where movid='".$mov."'";
            
  $result1=$conn->query($sql);
            while($row = $result1->fetch_assoc()){
                $_SESSION['movid']=$mov;
//                if ($mov == $row['mid'])
//                {
//                    $_SESSION['mid']=$mov;
                }
//            }
        }
    ?>
-->
</body>
</html>
