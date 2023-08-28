<html>
<head>
<title>Add a project</title>
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
#addProject {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

#addProject td, #addProject th {
  padding: 20px;
  padding-left: 90px;
}


#addProject th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
}


#addProject th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  
}
</style>

<div align=center> 
	<h2>Add Project</h2>
</div>

<div class="form">
    <form method="POST" action="addProjectForm.php" enctype="multipart/form-data">
	<table id="addProject" align=center>	
		<tr>
			<!-- <th><label>Project ID:</th> -->
			<th><input type="number" name="id" id="id" hidden/></th>
		</tr>	
		
		<tr>
			<th><label>Project Name:</th>
			<th><input type="text" name="pName" id="pName" required/></th>
		</tr>
		
		<tr>
			<th><label>Domain:</th>
			<!-- Change to dropdown -->
			<th><select name="Domain" id="domain">
				<option value="Application Development">Application Development</option>
				<option value="Artificial Intelligence">Artificial Intelligence</option>
				<option value="Data Analytics">Data Analytics</option>
				<option value="Fintech">Fintech</option>
				<option value="Infocomm Security">Infocomm Security</option>
				<option value="IoT">IoT</option>
				<option value="Interactive and Digital Media">Interactive and Digital Media</option>
				<option value="Network & Systems">Network & Systems</option>
			</select></th>
		
		<tr>
			<th><label>Year:</th>
			<th><input type="number" min=2012 max=2023 name="year" id="year" required/></th>
		</tr>	
				
		<tr>
			<th><label>Semester:</th>
			<th><input type="number" min=1 max=2 name="semester" id="semester" required/></th>

		</tr>
		
		<tr>
			<th><label>Project Type:</th>
			<!-- Change to dropdown -->
			<th><select name="pType" id="pType">
				<option value="RP">RP</option>
				<option value="Industry">Industry</option>
			</select></th>
		</tr>
			
		<tr>
			<th><label>Poster Image:</th>
			<th><input type="file" name="fn" id="fn" required/></th>
		</tr>

		<tr>
			<th><input type="submit" name="submit" id="submit" value="Submit"></th>
			<th><a href="http://localhost/fyp/Home Page.php">Cancel</a></th>
			
		</tr>
	</table>
</form>
</body>
</html>