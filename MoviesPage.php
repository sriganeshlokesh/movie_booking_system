<!DOCTYPE html>
<html>
<head>
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
<img src="C:\Users\Code.Bedroom-PC\Documents\Movie Booking System\Media\Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
   
<ul>
  <li><a  href="carousal.php">Home</a></li>
  <li><a class="active" href="MoviesPage.php">Movies</a></li>
  <li><a href="BookingHistory.php">Booking History</a></li>
  <li><a href="AboutPage.html">About</a></li>
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>

    
</body>
</html>
