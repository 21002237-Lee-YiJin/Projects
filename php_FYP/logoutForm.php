<?php
session_start();

// Check if the admin is logged in
$isAdminLoggedIn = isset($_SESSION['admin']) && $_SESSION['admin'];

if ($isAdminLoggedIn) {
  // Unset the $_SESSION['admin'] variable to log out the admin
  unset($_SESSION['admin']);
}

// Redirect the user back to the login page or any other page after logout
header('Location: Home Page.php'); // Replace 'login.php' with the desired page
exit();
?>