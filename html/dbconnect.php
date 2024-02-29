<?php
 //database connection variables for your UOS webspace database
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "maternify"; 

 try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
 ?>
 