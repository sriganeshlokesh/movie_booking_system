<!DOCTYPE html>
<html>
<head>
<style>
     body{
            background-image: url('Movies.jpg');
        }
    html { overflow-y: scroll; }
    
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
    color: white;
}

table {
    border-collapse: collapse;
    width: 100%;
    position: absolute;
    top:40%;
    
    
}

th, td {
    padding: 15px;
}
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
<img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
    <form action="AdminHome.php">
    <input type="submit" value="Back" class="button3"/>
</form>
<h1 style="color:white; position:absolute; top:30%;left:40%">BOOKING LOG</h1>

    <table>
  <tr>
    <th>BookingID</th>
    <th>Date</th>
    <th>Time</th>
      <th>UserID</th>
      <th>MovieID</th>
     <th>Seats</th>
      <th>Time of Booking</th>
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

$sql = "call disp1();"; 
$result = $conn->query($sql);
while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<th>".$row['bid']."</th>";
            echo "<th>".$row['date']."</th>";
    echo "<th>".$row['time']."</th>";
    echo "<th>".$row['uid']."</th>";
    echo "<th>".$row['movid']."</th>";
    echo "<th>".$row['seats']."</th>";
    echo "<th>".$row['bktime']."</th>";
    echo "</tr>";

}
        
        ?>
</table>

</body>
</html>
