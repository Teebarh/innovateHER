<?php
// $servername = "maternifyapp-server.mysql.database.azure.com";
// $username = "goppvwolqr";
// $password = "";
// $database = "maternifyapp-server"; 
$servername = "localhost";
$username = "root";
$password = "";
$database = "maternify"; 
try {
    // Set up SSL options
    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => '/path/to/BaltimoreCyberTrustRoot.crt.pem', // Replace with the path to your CA certificate
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false // Set to false if you don't want to verify the server's certificate
    );

    // Create a new PDO connection with SSL options
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $options);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo ""; // Connection successful message
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
