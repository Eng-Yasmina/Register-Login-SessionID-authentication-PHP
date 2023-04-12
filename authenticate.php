<?php
$name = $_POST['name'];
$userpassword = $_POST['password'];

// Connect to database
require 'config.php';
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully :)";

// Authenticate user
$sql = "SELECT * FROM users WHERE name='$name' AND password='$userpassword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User found, start session and redirect to dashboard
    session_start();
    //First WAY to get the user name for the session is from database 
    $row = mysqli_fetch_assoc($result);
    $_SESSION["name"] = $row["name"];
    header("Location: dashboard.php");
    //----------------------------------------------------------------
    //Second WAY to get the user name for the session is from the login form 
    //$_SESSION["name"] = $name;
    //----------------------------------------------------------------

    } else {
        header("Location: wrong-password.php");
    }

mysqli_close($conn);
?>