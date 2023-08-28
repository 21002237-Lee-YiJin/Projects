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

global $projectName;

?>


<head>
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
	
	<!-- select onChange="window.location.href=this.value">
		<option value="AI">AI</option>
		<option value="IoT">IoT</option>
	</select> -->
	
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
box-sizing: border-box;
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}

img {
vertical-align: middle;
object-fit: contain;
}

img.imageSize {
  width:100%;
  height: 35%;
  object-fit: fill;
}

.domainImage {
  width: 100%;
  height: 100%;
  object-fit: contain;
  opacity: 1;
}

.domainImage:hover {
	opacity:0.6;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.projectName {
  color: #000;
  font-family: "Luminari";
  font-size: 18px;
  padding: 4px;
  padding-left: 2px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 /* Container for image text */
.caption-container {
  text-align: center;
  background-color: #dfcaa0;
  padding: 15px;
  color: black;
}

body {
  background-color: #fffde7;
  padding: 18px;
  font-family: Arial;
}

h1 {
	font-family: "Luminari";
	font-size: 40px;
	font-style: italic;
	margin-bottom: 30px;
	text-align: center;
}

h2 {
	font-family: "Arial";
	font-size: 40px;
	font-style: italic;
	margin-bottom: 30px;
	text-align: center;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 40px;
  padding: 15px;
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.grid {
  background-color: #fffde7;
  text-align: center;
  font-size: 40px;
  border: 1px solid #000;
}

</style>


<body>

<!-- Slideshow Gallery -->

<h1>Republic Polytechnic FYP Gallery</h1>

	<div class="slideshow-container">

	<div class="mySlides fade">
	
	  <?php
	  $smallid = "(SELECT MIN(projectID) FROM image);"?>
	  
		<?php $sql = "SELECT * FROM image 
					INNER JOIN project ON project.projectID=image.projectID
					WHERE image.projectID=$smallid";
		
		$result = mysqli_query($conn, $sql);
		
		$imageid = '0';
		
		if (mysqli_num_rows($result) == 1) {
			while($row = mysqli_fetch_assoc($result)) { 
				$imagePath = $row["imagePath"];
				$projectName = $row["projectName"];
				$imageid = $row["imageID"];
				//echo $imageid;?>
				
			<img src="<?php echo $imagePath; ?>" class="imageSize">
			<?php
			$imageid++;
			}
		} else {
			echo "No Image";
		}
		?>
		<div class="projectName"><?php echo $projectName; ?></div>

	</div>

	<div class="mySlides fade">

	  <?php $sql = "SELECT * FROM image 
					INNER JOIN project ON project.projectID=image.projectID
					WHERE project.projectID=$imageid";
		
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) { 
				$imagePath = $row["imagePath"];
				$projectName = $row["projectName"] ?>
				
				<img src="<?php echo $imagePath; ?>" class="imageSize">
			<?php
			$imageid++;
			}
		} else {
			echo "No Image";
		}
		?>
	  <div class="projectName"><?php echo $projectName; ?></div>
	</div>

	<div class="mySlides fade">
	
	<?php $sql = "SELECT * FROM image 
					INNER JOIN project ON project.projectID=image.projectID
					WHERE project.projectID=$imageid";
		
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) { 
				$imagePath = $row["imagePath"];
				$projectName = $row["projectName"] ?>
				
				<img src="<?php echo $imagePath; ?>" class="imageSize">
			<?php
			//break;
			}
		} else {
			echo "No Image";
		}
		mysqli_close($conn);
		?>
	  <div class="projectName"><?php echo $projectName; ?></div>
	</div>

	<div class="caption-container">
		<p id="caption"></p>
	</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br>


<!-- Domain Grids -->

<h2>Explore the Domains!</h2>

<div class="grid-container">
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php" onclick="filterTable('Application Development')" );><img src="domain images/Application Development.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php"><img src="domain images/AI.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php"><img src="domain images/Data Analytics.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php"><img src="domain images/Fintech.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php"><img src="domain images/Infocomm Security.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php#IoT"><img src="domain images/IoT.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php#interactive and digital media"><img src="domain images/Interactive and Digital Media.png" class="domainImage"></a>
  </div>
  <div class="grid">
  <a href="http://localhost/fyp/Browsing Page.php#network & systems"><img src="domain images/Network & Systems.png" class="domainImage"></a>
  </div>
</div>

<br>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>



</body>
</html>