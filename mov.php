<?php
session_start();

$movid=$_SESSION['movid'];
$movname=$_SESSION['movname'];
$rating=$_SESSION['rating'];
$movinfo=$_SESSION['movinfo'];
$movpic=$_SESSION['movpic'];


echo $movid,"<br>";
echo $movname,"<br>";
echo $rating,"<br>";
echo $movinfo,"<br>";

echo "<img src=$movpic>";
?>