<?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "fyp";  
      
    
	$conn = new mysqli($host, $user, $password, $db_name);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?> 

<?php
if (isset($_GET['domain'])) {
    $domain = $_GET['domain'];

    if ($domain === 'ShowAll') {
        // If 'showAll' is provided as the domain value, fetch all projects
        $sql = "SELECT project.projectID, project.projectName, project.domain, image.imagePath
                FROM project
                INNER JOIN image ON project.projectID = image.projectID";
    } else {
        // Filter the data from both "project" and "image" tables based on the domain
        $sql = "SELECT project.projectID, project.projectName, project.domain, image.imagePath
                FROM project
                INNER JOIN image ON project.projectID = image.projectID
                WHERE project.domain = '$domain' OR domain = '$domain'";
				
    }
} else {
    // If no domain filter is provided, show all data from both "project" and "image" tables
    $sql = "SELECT project.projectID, project.projectName, project.domain, image.imagePath
            FROM project
            INNER JOIN image ON project.projectID = image.projectID";
}

$result = $conn->query($sql);

// Build and return the HTML table for the data
$tableRows = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
		$queryString = 'projectID=' . urlencode($row['projectID']);
		
        $tableRows .= '<tr>';
        $tableRows .= '<td><a href="http://localhost/fyp/Project Details.php?' . $queryString . '">' . $row['projectName'] . '</a></td>';
        $tableRows .= '<td>' . $row['domain'] . '</td>';
        $tableRows .= '<td><img src="' . $row['imagePath'] . '" alt="Poster"></td>';
        $tableRows .= '</tr>';
    }
} else {
    // Handle the case when no data is found
    $tableRows = '<tr><td colspan="3">No data found.</td></tr>';
}

echo $tableRows;
$conn->close();
?>
