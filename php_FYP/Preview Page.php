<html>
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
  </div> 
  
  <a href="http://localhost/fyp/Add Project.php">Add Project</a>
  <a href="http://localhost/fyp/About Us.php">About Us</a>
  <a href="http://localhost/fyp/Contact Us.php">Contact Us</a>
  <a href="http://localhost/fyp/Home Page.php">Logout</a>
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
</style>

<body>
	
<style>
#previewTable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

#previewTable td, #previewTable th {
  padding: 40px;
}


#previewTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
}


#previewTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  
}
</style>
<!-- 
include ('addProjectForm.php');

	$id = $_GET['projectID'];
	//$query = "SELECT * FROM project WHERE projectID = '$id'";
	$query = "SELECT MAX(projectID) AS largest_id FROM project WHERE projectID = '$id'";
	$result = mysqli_query($con, $query) or die(mysql_error($con));
	$row = mysqli_fetch_array($result);
	if (!empty($row)) {
		$domain = $row['domain'];
        $year = $row['year'];
        $semester = $row['semester'];
		$pType = $row['pType'];
		$fn = $row['fn']['name'];
	}
	mysqli_close($con);
-->

<div align=center> 
	<h2>Preview Project</h2>
</div>

<?php
//include ('addProjectForm.php');

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fyp";
	

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

/*
$queryID = "SELECT * FROM project WHERE projectID = (SELECT MAX(projectID) FROM project)";
$queryName = "SELECT * FROM project WHERE projectName = (SELECT MAX(projectID) FROM project)";
$queryDomain
$queryYear
$querySemester
$queryPrjType
*/

	$query = "SELECT * FROM project WHERE projectID = (SELECT MAX(projectID) FROM project)";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
	if (!empty($row)) {
		$pid = $row['projectID'];
		//echo $pid;
		$name = $row['projectName'];
		$domain = $row['domain'];
		//echo $domain;
        $year = $row['year'];
		//echo $year;
        $semester = $row['semester'];
		//echo $semester;
		$pType = $row['projectType'];
		//echo $pType;
		$members = $row['members'];
		$supervisor = $row['supervisor'];
		//$fn = $row['projectName'];
		$des = $row['description'];
		//echo $fn;
	}

    // close connection
    mysqli_close($con);

?>

<table id="previewTable" align=center>	
	<tr>
		<th><label>Project ID:</th>
        <th><?php echo $pid ?></th>
	</tr>

	<tr>
		<th><label>Name:</th>
        <th><?php echo $name; ?></th>
	</tr>
	
	<tr>
		<th><label>Domain:</th>
        <th><?php echo $domain; ?></th>
	</tr>
	
	<tr>
		<th><label>Year:</th>
        <th><?php echo $year; ?></th>
	</tr>
			
	<tr>
		<th><label>Semester:</th>
        <th><?php echo $semester; ?></th>

	</tr>
    
    <tr>
		<th><label>Project Type:</th>
        <th><?php echo $pType; ?></th>

	</tr>
    
    <tr>
		<th><label>Team Members:</th>
        <th><?php echo $members; ?></th>
	</tr>
	
	<tr>
		<th><label>Supervisor:</th>
        <th><?php echo $supervisor; ?></th>
	</tr>
    
    <tr>
		<th><label>Description:</th>
        <th><?php echo $des; ?></th>
	</tr>
    
    </br>
			
	<!-- <tr> -->
		<!-- <th><label>Poster Image:</th> -->
        <!-- <th><input type="text" value="Taken from DB" name="image" id="image" readonly/></th> -->
	<!-- </tr> -->
</table>

<p>
<div align=center>
	<div align=center style="width:250; height:57; background-color: lightgreen; align=center">
	<br>
		Project added Successfully!
	</div>
	</div>
</p>

</body>
</html>