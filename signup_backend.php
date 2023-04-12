<!-- save the user data in my database and create a new record for him -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$userpassword = $_POST['password'];
// Connect to database
require 'config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
// echo "Connected successfully :)";
//create table
$sql = "CREATE TABLE IF NOT EXISTS users(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(25) NOT NULL)";

$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('Error! could not create table: ' . mysqli_error($conn));
    }

// echo "Connected successfully :)";
// Insert data into table
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$userpassword')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "New record created successfully"; 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);
header("Location: login.php");
exit();
?>