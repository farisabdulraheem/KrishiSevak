<!-- 
// // define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'krishisevak');
// $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); -->

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "krishisevak";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
return $db;
?>