<?php
session_start();

// Check if the admin is logged in
$isAdminLoggedIn = isset($_SESSION['admin']) && $_SESSION['admin'];
?>

<html>

<?php
	
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
        die("Connection failed!" . mysqli_connect_error());
    }
?>

<head>
<title>Project details</title>
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
{
  box-sizing: border-box;
}

body {
  background-color: #fffde7;
  padding: 18px;
  font-family: Arial;
}

h1 {
	font-family: "Arial";
	font-size: 40px;
	margin-bottom: 30px;
	text-align: center;
}

h2 {
	text-align: left;
}

img {
vertical-align: middle;
object-fit: contain;
}

img.pimage {
  width:50%;
  height: auto;
  object-fit: fill;
}

div.absolute {
  position: absolute;
  top: 200px;
  right: 0;
  left: 50%;
  width: 90%;
  height: auto;
}

.textdiv {
  width: 45%;
  word-wrap: break-word;
}

.headerdiv {
	text-align: center;
}


</style>

<body>

<br>
<?php
if (isset($_GET['projectID'])) {
    // Get the projectID from the query string
    $projectID = $_GET['projectID'];

    // Prepare the SQL statement to retrieve project details
    $sql = "SELECT * FROM project WHERE projectID = '$projectID'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
  <div class="headerdiv">

    <h1><?php echo $row["projectName"] ?></h1><br><br>
	</div>
	<div class="textdiv">
	<h2>Project ID:</h2> <?php echo $row["projectID"] ?><br>
	<h2>Project Name:</h2> <?php echo $row["projectName"] ?><br>
	<h2>Done by:</h2> <?php echo $row["members"] ?><br>
	<h2>Description:</h2> <?php echo $row["description"] ?>
	</div>
	<?php
	break;
  } 
} else {
	  echo "0 results";
  }
}
?>

<div class="absolute">
<?php $sql = "SELECT imagePath FROM image where projectID = '$projectID'"; 
// [above line] get image from database, image must correspont to project selected
		
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) { 
				$new123 = $row["imagePath"];?>
				<br><img src="<?php echo $new123; ?>" class="pimage">
		<?php 
			break;
			}
		} else {
			echo "0 results";
		}
		?>
</div>
	
	
</body>
</html>