<?php
 //database connection variables for your UOS webspace database
 $servername = "maternifydatabase.mysql.database.azure.com";
 $username = "innovateher";
 $password = "Teebarh123!";
 $database = "maternifydatabase"; 

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
 