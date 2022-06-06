<?php

//mysql://b67892ce6b0f26:6501b070@eu-cdbr-west-02.cleardb.net/heroku_1f21684f4eb7711?reconnect=true
$servername = "eu-cdbr-west-02.cleardb.net";
$database = "heroku_1f21684f4eb7711";
$username = "b67892ce6b0f26";
$password = "6501b070";

/*
$servername = "Localhost";
$database = "dnic_bd";
$username = "root";
$password = "";
*/
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>