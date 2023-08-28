<?php
session_start();

// Check if the admin is logged in
$isAdminLoggedIn = isset($_SESSION['admin']) && $_SESSION['admin'];
?>

<html>
<head>
<title>About Us</title>
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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  border: 1px solid #ccc;
  padding: 47px;
  gap: 10px;
  text-align: center;
  justify-content: center;
  align-items: center;
  width: 700px;
  margin: auto;
}	 
</style>
    
<body>

<div>
	<h2><font size="10">About Us</font></h2>

</div> 
    <div class="card">
		<h3><font size="5">We are a group of Year 3 students doing our Final Year Project (FYP). This is our webpage displaying a variety of student projects from previous years. We hope you enjoy exploring through these projects!☺</font></h3>
		<h4><font size="4">Start browsing <a href="http://localhost/fyp/Browsing Page.php">Here</font></a>
	</div>
 </div>
 
</body>
</html>