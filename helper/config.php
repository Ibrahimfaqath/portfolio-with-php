<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "my-portfolio";

// Koneksi ke database MySQL dengan PDO
try {
  $pdo = new PDO("mysql:host=$servername;port=3333;dbname=$dbname;charset=utf8mb4", $username, $password);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOExcepion $e) {
  echo "Conection failed: " . $e->getMessage();
} 

?>
