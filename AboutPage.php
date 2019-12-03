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
<img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
<ul>
  <li><a  href="carousal.php">Home</a></li>
  <li><a  href="Movies.php">Movies</a></li>
  <li><a  href="BookingHistory.php">Booking History</a></li>
  <li><a class="active" href="AboutPage.php">About</a></li>
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>

    <h1 style="position:absolute;top:40%;left:35%;color:white;font-size:50px">-----ABOUT US-----</h1>
    <center>
    <p style="font-size:30px;position:absolute;top:54%;color:white">Showtime is a PHP/MySQL based seat reservation system allowing bookings in a few easy steps. Users can manage reservations.This Movie ticket booking system can be deployed on any website offering tickets for movies </p><br>
    <p style="font-size:30px;position:absolute;top:80%;color:white">Cinema companies can satisfy comfortable facilities to their customers. The relationship between cinema manager and customer satisfy a good communication to complete ticketing process. With this platform we developed, we are hoping to reduce time wasting, avoid misunderstandings, provide easy data flow, customer pleasure, and less hard work.</p></center>
</body>
</html>
