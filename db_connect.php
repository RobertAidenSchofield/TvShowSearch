<?php
$servername = "localhost";
$username = "robertschofield";
$password = "zrrJ8zNEdpuTwuty";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>