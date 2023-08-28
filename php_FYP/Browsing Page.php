<?php
session_start();

// Check if the admin is logged in
$isAdminLoggedIn = isset($_SESSION['admin']) && $_SESSION['admin'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Browse projects</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#posters {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#posters td, #posters th {
  border: 1px solid #ddd;
  padding: 8px;
}

#posters tr:nth-child(even){background-color: #f2f2f2;}

#posters tr:hover {background-color: #ddd;}

#posters th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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

<style>
header {
  padding: 30px;
  text-align: left;
  font-size: 35px;
  color: black;
}

</style>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 {
  box-sizing: border-box;
}

body {
  background-color: #fffde7;
  padding: 18px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 18px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  margin-bottom: 5px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>Browse</h1>
<hr>
<h2> </h2>


  <button onclick="filterTable('Application Development')"> Application Development</button>
  <button onclick="filterTable('Artificial Intelligence')"> Artificial Intelligence</button>
  <button onclick="filterTable('Data Analytics')"> Data Analytics</button>
  <button onclick="filterTable('Fintech')"> Fintech</button>
  <button onclick="filterTable('Infocomm Security')"> Infocomm Security</button>
  <button onclick="filterTable('IoT')"> IoT</button>
  <button onclick="filterTable('Interactive and Digital Media')"> Interactive and Digital Media</button>
  <button onclick="filterTable('Network & Systems')"> Network & Systems</button>
  <button onclick="filterTable('ShowAll')"> Show all</button>

<style>
        /* Table Styling */
       #projectTable {
            width: 100%;
            border-collapse: collapse;
        }

        #projectTable th, #projectTable td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        #projectTable th {
            background-color: #E8DED1;
        }

        #projectTable img {
            max-width: 300px;
            max-height: 300px;
        }

        /* Buttons Styling */
        button {
            padding: 7px 15px;
            margin-right: 3px;
            background-color: #E8C39E;
            color: #000000;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #EACCAD;
        }
    </style>
	
<style>


#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}



.show {display: block;}
</style>

<br>
<br>

 <table id="projectTable">
        <thead>
            <tr>
                <th>Project</th>
                <th>Domain</th>
                <th>Poster</th>
            </tr>
        </thead>
		<tbody>
            <!-- Table content will be added dynamically using JavaScript -->
        </tbody>
    </table>

    <script>
           function filterTable(domain) {
			fetch('BrowsingForm.php?domain=' + encodeURIComponent(domain))
            .then(response => response.text())
            .then(data => {
                // Update the table body with the returned data
                const tableBody = document.querySelector('#projectTable tbody');
                tableBody.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    }

    // Example: Trigger the 'if' block with the 'domain' parameter when a button is clicked
    document.getElementById('filterButton').addEventListener('click', function() {
        const domainValue = 'example'; // Replace 'example' with the desired domain value
        filterTable(domainValue);
    });

    // Optional: To show all data, trigger the 'else' block without the 'domain' parameter
    document.getElementById('showAllButton').addEventListener('click', function() {
        filterTable('ShowAll'); // Pass an empty string to trigger the 'else' block
    });
    </script>


<!-- END MAIN -->
</div>


</body>
</html>