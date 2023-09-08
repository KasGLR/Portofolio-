<?php
  $servername = "localhost";
  $username = "portfolio_user";
  $password = "x2zZBvG%4p";
  $db_name = "pf_db";   


try {
  $conn = new PDO("mysql:host=$servername;dbname=pf_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>