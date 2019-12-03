
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
    div {
    width: 1000px;
        height: 600px;
    padding: 10px;
    border: 5px solid white;
    margin: 0;
        border-radius: 15px;
        position: absolute;
        top: 40%;
        left: 15%;
        background-color: darkgray;
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
        </style>
    </head>
    <body>
        <ul>
  <li><a  href="carousal.php">Home</a></li>
  <li><a  href="Movies.php">Movies</a></li>
  <li><a  class="active"  href="BookingHistory2.php">Booking History</a></li>
  <li><a  href="AboutPage.php">About</a></li>
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 10%; right:35%">
        <table style="width:100%; position:absolute; top:40%;border:1px solid red; color:white">
        <tr>
            <th><h3>BOOKING ID</h3></th>
            <th><h3>MOVIE NAME</h3></th>
            <th><h3>MOVIE DATE</h3></th>
            <th><h3>MOVIE TIME</h3></th>
            <th><h3>MOVIE SEATS</h3></th>
            
            
            </tr>
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
$uid=$_SESSION['username'];
//echo "bid=".$bid;
$sql = "SELECT  bid, movname, date, time, seats FROM booking b,movies m where b.movid=m.movid and b.uid ='".$uid."'"; 
$result = $conn->query($sql);
while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<th>".$row['bid']."</th>";
            echo "<th>".$row['movname']."</th>";
            echo "<th>".$row['date']."</th>";
    echo "<th>".$row['time']."</th>";
    echo "<th>".$row['seats']."</th>";
    echo "</tr>";

}





?>
               </table>
    </body>
</html>