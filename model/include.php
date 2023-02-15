<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "mydb"; 

  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
?>
