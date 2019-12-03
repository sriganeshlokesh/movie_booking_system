<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
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
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     display: block;
     max-width: 1200px !important;
     height: 400px !important;
 }
         {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 100%;
    padding: 15px;
    position: absolute;
    top: 110%;
    color: white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:600px) {
    .column {
        width: 100%;
    }
}
        .ul{
            position: absolute;
            left:7%;
        }
    </style>
</head>
<body>
    <img src="Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
<ul>
  <li><a  class="active" href="carousal.php">Home</a></li>
  <li><a  href="Movies.php">Movies</a></li>
  <li><a href="BookingHistory.php">Booking History</a></li>
  <li><a href="AboutPage.php">About</a></li>
    <li><a href="Logout.php" >LogOut</a>  </li>
</ul>

<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: absolute; top: 40%;left: 7%">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="width:100% height:500px">
      <div class="item active">
        <img src="KGFPoster.jpg" alt="KGF" style="width:100%;">
          <div class="carousel-caption">
          <h3>KGF</h3>
        </div>
      </div>

      <div class="item">
        <img src="RichiePoster.jpg" alt="Richie" style="width:100%;">
          <div class="carousel-caption">
          <h3>Richie</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="SaahoPoster.jpg" alt="Saaho" style="width:100%;">
          <div class="carousel-caption">
          <h3>Saaho</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div class="row">
  <div class="column">
    <center><h2>Trivia</h2></center>
      <ul class="ul">
<center><p>1. Die Hard originated from the failed script of Commando 2.
    <br>
2. Samuel L. Jackson demanded that the studio keep Snakes on a Plane as the title because it was the only reason he accepted the role.
<br>
3. Rather than use CGI, Tim Burton had 40 squirrels trained to crack nuts for Charlie & The Chocolate Factory.
<br>
4. Due to a zipper breaking, Olivia Newton-John had to be sewn into the trousers she wears in the last carnival scene of Grease.
<br>
5. The sounds made by the Brachiosaurs in Jurassic Park were a combination of whale and donkey sounds.
<br>
6. In National Treasure, the good guys in the movie use Google and the bad guys use Yahoo!
<br>
7. Django Unchained is the first time in 16 years that Leonardo DiCaprio didn’t get the top billing.
<br>
8. For Dr. Strangelove, Peter Sellers was paid $1 million, 55 percent of the film’s budget. Stanley Kubrick quipped “I got three for the price of six.”
<br>
9. Ryan Gosling was cast as Noah in The Notebook because the director wanted someone “not handsome.”
<br>
10. When Harvey Weinstein wanted to edit Princess Mononoke to make it more marketable, the director Hayao Miyazaki sent him a katana with a simple message: “No cuts.”
<br>
11. For LOTR: Return of the King, Elijah Wood had Alka Seltzer tablets in his mouth so he’d foam when Shelob stabbed him.
<br>
12. The total footage shot for 2001: A Space Odyssey was some 200 times the final length of the film.
<br>
13. The director of Star Trek II: Wrath of Khan had to wear William Shatner out by doing multiple takes until he’d get tired enough to start actually acting. Extra clarity here.
<br>
14. In Halloween, Michael Myers’ mask is actually a Captain Kirk mask which was altered for the film. It was purchased for less than $2.
<br>
15. In Iron Man/Avengers, J.A.R.V.I.S is an acronym for “Just A Rather Very Intelligent System.” Side note — the voice of J.A.R.V.I.S, Paul Bettany, recently admitted he has never seen any Iron Man or Avengers film.<br>
        </p>
        </center>
          </ul>
  </div>
  
</div>



</body>
</html>

