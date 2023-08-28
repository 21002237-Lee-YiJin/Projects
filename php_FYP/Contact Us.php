<?php
session_start();

// Check if the admin is logged in
$isAdminLoggedIn = isset($_SESSION['admin']) && $_SESSION['admin'];
?>

<html>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #dfcaa0;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  padding-top: 20px;
  padding-bottom: 20px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<div class="navbar">
	<a href="http://localhost/fyp/Home Page.php"><img height="20" style="max-width: 100px;"
		src="logo-republicpoly-450 (2).png"/></a>
  <a href="http://localhost/fyp/Browsing Page.php">Browse</a>
  
  <div class="dropdown">
    <button class="dropbtn">Domain</button>
    <div class="dropdown-content">
      <a href="http://localhost/fyp/Browsing Page.php">Application Development</a>
      <a href="http://localhost/fyp/Browsing Page.php">Artificial Intelligence</a>
      <a href="http://localhost/fyp/Browsing Page.php">Data Analytics</a>
      <a href="http://localhost/fyp/Browsing Page.php">Fintech</a>
      <a href="http://localhost/fyp/Browsing Page.php">Infocomm Security</a>
      <a href="http://localhost/fyp/Browsing Page.php">IoT</a>
      <a href="http://localhost/fyp/Browsing Page.php">Interactive and Digital Media</a>
      <a href="http://localhost/fyp/Browsing Page.php">Network & Systems</a>
    </div>
  </div> 
  
  <?php if ($isAdminLoggedIn): ?>
  <a href="http://localhost/fyp/Add Project.php">Add Project</a>
  <a href="http://localhost/fyp/About Us.php">About Us</a>
  <a href="http://localhost/fyp/Contact Us.php">Contact Us</a>
  <a href="logoutForm.php">Logout</a>
  <?php else: ?>
  <a href="http://localhost/fyp/About Us.php">About Us</a>
  <a href="http://localhost/fyp/Contact Us.php">Contact Us</a>
  <a href="http://localhost/fyp/Login Page.php">Login</a>
  <?php endif; ?>
  
</div>

</head>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #fffde7;
  padding: 18px;
  font-family: Arial;
}

h2 {
	text-align: center;
}
</style>

<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 20px; /* Gap between grid items */
  margin: auto; /* Set margin to zero */
  padding-top: 50px; /* Set padding to zero */
  position: relative;
  max-width: 1000px;
  
}

.grid-item {
  box-sizing: border-box;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
  border-radius: 8px; /* Adjust the radius value to control the amount of rounding */
  max-width: 550px;
  padding: 20px;
  margin: 0px; /* Set margin to zero */
  text-align: center;
}

</style>

<body>

<div>
	<h2><font size="10">Contact Us</font></h2>

</div> 

<div class="grid-container">
  <div class="grid-item">
    <h3>Lee Yi Jin</h3>
    <p>☎ Phone Number: 82969228</p>
	<p>📧 Email Address: 21002237@myrp.edu.sg</p>
  </div>
  <div class="grid-item">
    <h3>Yang Yong Xin, Anessa</h3>
    <p>☎ Phone Number: 84840028</p>
	<p>📧 Email Address: 21027690@myrp.edu.sg</p>
  </div>
  <div class="grid-item">
    <h3>Kassie Pan Rui En</h3>
    <p>☎ Phone Number: 90752236</p>
	<p>📧 Email Address: 21015516@myrp.edu.sg</p>
  </div>
  <div class="grid-item">
    <h3>Cristi Goh Wen Jing</h3>
    <p>☎ Phone Number: 96431415</p>
	<p>📧 Email Address: 21029424@myrp.edu.sg</p>
  </div>
</div>

</body>
</html>