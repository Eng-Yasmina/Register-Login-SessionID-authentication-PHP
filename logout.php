<?php
session_start();
session_destroy();
//-------BONUS---------------
// Destroy session cookie
$cookie_name = session_name();
// Check if the cookie exists
if(isset($_COOKIE[$cookie_name])) {
    // Delete the cookie by setting its value to empty
    setcookie($cookie_name, '', time()-1, '/');
    // Unset the session ID variable
    unset($_SESSION[session_name()]); 
} 
header("Location: login.php");
exit();
?>
