<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include your database connection file
    include 'dbconnect.php';

    // Retrieve user input from the login form
    $email = $_POST['email'];
    $user_password = $_POST['password']; // Renamed variable

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); // Use database user credentials here
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        // Prepare SQL statement to retrieve user data
        $stmt = $conn->prepare("SELECT * FROM userinfo WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        // Check if the user exists
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            // Verify the password
            if (password_verify($user_password, $user['password'])) { // Compare user-entered password with hashed password from database
                // If login is successful, set session variables and redirect
                $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the column name for the unique user identifier
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = true;
                header("Location: ./Dashboard/home.php"); // Redirect to the welcome page
                exit();
            } else {
                 // If the entered username and password do not match the admin credentials
            echo "Invalid username or password";
                exit();
            }
        } else {
            // If the user does not exist
            $_SESSION['error_message'] = "User not found";
            header("Location: login.html"); // Redirect back to the login form page
            exit();
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        $_SESSION['error_message'] = "Connection failed: " . $e->getMessage();
        header("Location: login.html"); // Redirect back to the login form page
        exit();
    }
}
?>
