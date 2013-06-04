<?php
// Create connection
$con=mysqli_connect("localhost","s3system","pirulito","s3system");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
  }
  
  echo "Parece estar funcionando!";
?>