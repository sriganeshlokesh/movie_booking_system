
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
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 10%; right:35%">
        <center> <h1 style="position:absolute;top:30%;left:25%; color:white">-----TICKET SUCCESSFULLY BOOKED-----</h1></center>
        <table style="width:100%; position:absolute;top:40%; border:1px solid red; color:white">
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
$sql = "SELECT bid,movname, date, time, seats FROM booking b,movies m where b.movid=m.movid and b.uid ='".$uid."'"; 
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
        <form action="carousal.php">
    <input type="submit" value="Home" class="button3"/>
</form>
    </body>
</html>