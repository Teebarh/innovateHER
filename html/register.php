<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register your interest</title>
    <link rel="stylesheet" href="../styles/welcome.css" />
</head>
<body>
<?php
// Start the session
session_start();

//including connection variables  
include 'dbconnect.php';

try {
    // Database connection code
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insertion logic
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO userinfo (firstname, email, password) VALUES (:firstname, :email, :password)");
        // Bind parameters
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password); // Store the hashed password
        // Execute statement
        $stmt->execute();
        
        // Store the first name in the session variable
        $_SESSION['firstname'] = $firstname;
    }
} catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/welcome.css" />
</head>
<body>
    <div class="myContent">
        <?php
        // Check if the user is logged in
        if (isset($_SESSION['firstname'])) {
            $firstname = $_SESSION['firstname'];
            echo "<h1 class='welcomeHeader'>WELCOME, $firstname!</h1>";
        } else {
            echo "<h1 class='welcomeHeader'>WELCOME!</h1>";
        }
        ?>
        <p class="survey">
            Please answer a few questions and we will personalize the app for you
        </p>
        <a href="./onboarding/onboardFlow1.html">
            <button class="continueBtn">Continue</button>
        </a>
        <p class="footer">
            By tapping "continue", you agree to our terms of services and privacy policies
        </p>
    </div>
</body>
</html>
</body>
</html>