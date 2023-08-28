<?php

global $fileName;
global $fileType;
global $des;
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
		//$id = $_POST['id'];
		$name = $_POST['pName'];
		$domain = $_POST['Domain'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
		$pType = $_POST['pType'];
		$fn = $_FILES['fn']['name'];

    }
    
	// database details
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
	
	$query = "SELECT * FROM project WHERE projectID = (SELECT MAX(projectID) FROM project)";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);


	include ( 'class.pdf2text.php' ) ;

	function  output ( $message )
	   {
		if  ( php_sapi_name ( )  ==  'cli' )
			echo ( $message ) ;
		else
			echo ( nl2br ( $message ) ) ;
	    }

	/*$a = new PDF2Text();
	$a->setFilename('FYP Project 2.pdf');
	$a->decodePDF();*/
	

		


/*
function extract_names($text) {
    $keywords = array("Students:", "Members:", "Members", "member", "PI:");
    $stop_words = array("Supervisor:", "Figure");
    $names = array();

    foreach ($keywords as $keyword) {
        $pos = strpos($text, $keyword);
        if ($pos !== false) {
            $start = $pos + strlen($keyword);
            $text = substr($text, $start);
            break;
        }
    }

    while (!empty($text)) {
        $min_pos = PHP_INT_MAX;
        $next_stop_word = "";

        foreach ($stop_words as $stop_word) {
            $pos = strpos($text, $stop_word);
            if ($pos !== false && $pos < $min_pos) {
                $min_pos = $pos;
                $next_stop_word = $stop_word;
            }
        }

        if ($min_pos === PHP_INT_MAX) {
            $min_pos = strlen($text);
        }

        $name = trim(substr($text, 0, $min_pos));
        if (!empty($name)) {
            $names[] = $name;
        }

        $text = substr($text, $min_pos + strlen($next_stop_word));
    }

    return $names;
}

// Test cases
$text1 = "Shiny Seniority Project OverviewShinySeniorityapplicationsolutionthatconnectssocietylargewiththeelderlieslivingnursinghomescommunityhospitalssolutionenablesfamilymemberstotouchwiththeirelderliesItenablesthepublicinteractwitholdfolkscreatingmeaningfulactivitieswithrewardsfortheseniorsparticipateandplatformsignforvolunteeringeventsusesBlockchainstoretheserecordsastoproveauthenticitytheeventandcryptocurrencywalletandrewardsystem Students:Pan Mingwei,Wee Kaien,Kristi Ellie JauwSupervisor:Frankie";
$text2 = "IOT – Smart Home Partner Organisation: CommFront Communications Project Overview Problem : Many home users tend to forget to turn off the lights before leaving their house, which leads to a wastage of electricity . Once out of their house, there is no easy way whereby they can turn off these lights . Requirements : Using the Internet of Things ( IoT ) technologies, users can remotely control their smart devices with a few touches on their smartphones . Consequently it introduces convenience into the daily activities of the users, such as turning off/on the lights in their homes . Solution : Users are able to remotely control the smart light bulbs through a mobile application, at their convenience . The user needs to have a Philips Hue Starter Kit (Hue Bridge and Philips LED Bulbs) as well as an Android application to control the light bulbs . Through the Internet users allow the Hue Bridge and the Android application to communicate anytime, anywhere . Technologies : Android Studio, Java, Google Firebase Team Members Tham ZhiYang , Henry Maung Teng Han, Er Yi Chen, Tey Jia Jia Supervisor: Mr Koh Thong Hwee User interface to remotely control their Philips Hue Lights";
$text3 = "Map of The Istana. Team Members: Ryan Wong Jasmine Seow Ang Jia Yi Supervisor: Ms Tan Hwee Yong";
$text4 = "PI: Kong CHee Chong PI: Derek Lee, Vincent Ng, Aliza Ramli Team member: Selina Md Kassim Funded By: Republic Polytechnic 3D Virtual Laboratory Figure 1: Virtual Laboratory Environment Figure 2: Use of Virtual Reality Headset & Handlers Figure 3: Specimen Ha";

$names1 = extract_names($text1);
$names2 = extract_names($text2);
$names3 = extract_names($text3);
$names4 = extract_names($text4);

print_r($names1);
print_r($names2);
print_r($names3);
print_r($names4);
*/



	//check if file upload form is submitted
	$status = $statusMsg = '';
	if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["fn"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["fn"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		//echo $fileName;
		
	$a = new PDF2Text();
	$a->setFilename($fileName);
	$a->decodePDF();
	
	//$file	=  'FYP Project 1' ; // name of pdf file without .pdf extenstion, sample.pdf
	//$pdf	=  new PDF2Text ( $file.'.pdf' ) ;
	//$pdf = "$file.pdf";
	//echo $pdf;
	
	//output ( "Extracted file contents: \n" ) ;
	//output ( $a -> text ) ;
	$des = $a->output();
	echo $des;

//VERSION 1 TESTING SUPERVISOR
// Function to find the supervisor name in the text
/*function extractSupervisorName($text) {
    // Search for the keyword "supervisor" case-insensitive and extract the name that follows
    $pattern = '/supervisor\s*:\s*([^\s]+)/i';
    if (preg_match($pattern, $text, $matches)) {
        // Extract the name after the keyword "supervisor"
        $supervisorName = trim($matches[1]);
        return $supervisorName;
    } else {
        // Return null if the keyword is not found
        return null;
    }
}*/

//VERSION 2 TESTING SUPERVISOR
function extractSupervisorName($text) {
    // Search for the keyword "supervisor" case-insensitive and extract the name that follows
    $pattern = '/supervisor\s*:\s*(\w+(?:\s+\w+){0,3})/i';
    if (preg_match($pattern, $text, $matches)) {
        // Extract the name after the keyword "supervisor"
        $supervisorName = trim($matches[1]);
        return $supervisorName;
    } else {
        // Return null if the keyword is not found
        return null;
    }
}

/*function extractSupervisorName($text) {
    // Search for the keyword "supervisor" case-insensitive and extract the name that follows
    $pattern = '/supervisor\s*:\s*((?:\w+\s*){1,4})/i';
    if (preg_match($pattern, $text, $matches)) {
        // Extract the name after the keyword "supervisor"
        $supervisorName = trim($matches[1]);
        return $supervisorName;
    } else {
        // Return null if the keyword is not found
        return null;
    }
}*/

// Example usage TASK 2 (SUPERVISOR)
//$text = "This is a sample text. Supervisor: Mr Koh Thong Hwee";
$text = $des;
$supervisorName = extractSupervisorName($text);
//echo $supervisorName;
	
	// VERSION 3
	//from pdftry, testing out
	//include('pdftry.php');
	//$pdf = new PdfToText( );
	//$pdf -> Load ('FYP Project 2.pdf');
	//echo $pdf -> Text;

/*function extractTeamMembers($text) {
    $members = array();

    // Find the position of "Members" and "Supervisor" keywords
    $membersStart = strpos($text, 'Members'|'Students');
	$supervisorStart = strpos($text, "Supervisor");

    // If "Members" and "Supervisor" keywords are found, extract the names in between
    if ($membersStart !== false && $supervisorStart !== false) {
        $membersText = substr($text, $membersStart + strlen("Members"), $supervisorStart - $membersStart - strlen("Members"|"Students"));

        // Split the names by line breaks
        $membersArray = explode("\n", $membersText);

        // Trim each member's name and add to the members array
        foreach ($membersArray as $member) {
            $memberName = trim($member);
            if (!empty($memberName)) {
                $members[] = $memberName;
            }
        }
    }

    return $members;
}*/

//VERSION 2 TESTING
function extractTeamMembers($text) {
    $members = array();

    // Find the position of "Members" or "Students" keyword
    $membersStart = strpos($text, 'Members');
    $studentsStart = strpos($text, 'Students:');
    $startPos = min($membersStart !== false ? $membersStart : PHP_INT_MAX, $studentsStart !== false ? $studentsStart : PHP_INT_MAX);

    // Find the position of "Supervisor" keyword
    $supervisorStart = strpos($text, "Supervisor");

    // If "Members" or "Students" and "Supervisor" keywords are found, extract the names in between
    if ($startPos !== false && $supervisorStart !== false) {
        $membersText = substr($text, $startPos + strlen('Members'), $supervisorStart - $startPos - strlen('Members'));

        // Split the names by line breaks
        $membersArray = explode("\n"|",", $membersText);

        // Trim each member's name and add to the members array
        foreach ($membersArray as $member) {
            $memberName = trim($member);
            if (!empty($memberName)) {
                $members[] = $memberName;
            }
        }
    }
	
    return $members;
}

//THIRD VERSION MEMBER TESTING
/*function extractTeamMembers($text) {
    $members = array();

    // Find the position of "Members" or "Students" keyword
    $membersStart = strpos($text, 'Members');
    $studentsStart = strpos($text, 'Students:');
    $startPos = min($membersStart !== false ? $membersStart : PHP_INT_MAX, $studentsStart !== false ? $studentsStart : PHP_INT_MAX);

    // Find the position of "Supervisor" keyword
    $supervisorStart = strpos($text, "Supervisor");

    // If "Members" or "Students" and "Supervisor" keywords are found, extract the names in between
    if ($startPos !== false && $supervisorStart !== false) {
        $membersText = substr($text, $startPos + strlen('Members'), $supervisorStart - $startPos - strlen('Members'));

        // Remove "s:" or ": " at the start of the string
        $membersText = ltrim($membersText, 's:');

        // Split the names by commas
        $membersArray = explode(",", $membersText);

        // Trim each member's name and add to the members array
        foreach ($membersArray as $member) {
            $memberName = trim($member);
            if (!empty($memberName)) {
                $members[] = $memberName;
            }
        }
    }

    return $members;
}*/

// Sample text TASK 2 (MEMBERS)
/*$text = "Team Members
Tham ZhiYang, Henry Maung Teng Han, Er Yi Chen, Tey Jia Jia
Supervisor: Mr Koh Thong Hwee";*/
//$text = "IOT – Smart Home Partner Organisation: CommFront Communications Project Overview Problem : Many home users tend to forget to turn off the lights before leaving their house, which leads to a wastage of electricity . Once out of their house, there is no easy way whereby they can turn off these lights . Requirements : Using the Internet of Things ( IoT ) technologies, users can remotely control their smart devices with a few touches on their smartphones . Consequently it introduces convenience into the daily activities of the users, such as turning off/on the lights in their homes . Solution : Users are able to remotely control the smart light bulbs through a mobile application, at their convenience . The user needs to have a Philips Hue Starter Kit (Hue Bridge and Philips LED Bulbs) as well as an Android application to control the light bulbs . Through the Internet users allow the Hue Bridge and the Android application to communicate anytime, anywhere . Technologies : Android Studio, Java, Google Firebase Team Members Tham ZhiYang , Henry Maung Teng Han, Er Yi Chen, Tey Jia Jia Supervisor: Mr Koh Thong Hwee User interface to remotely control their Philips Hue Lights";
$text = $des;
// Extract team members' names
$teamMembers = extractTeamMembers($text);

// Print the team members' names (FOR TESTING)
foreach ($teamMembers as $member) {
    $member . PHP_EOL;
}

        // Allow certain file formats 
        $allowTypes = array('pdf'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['fn']['tmp_name']; 

            // Insert project and image content into database 
			//can liao 
			//$dbInsertImg = $con->query("INSERT INTO image (imageID, imagePath, projectID) VALUES (2, '$image', 2)");
			
			//can liao
			$dbInsertPrj = $con->query("INSERT INTO project (projectName, domain, members, supervisor, year, semester, projectType, description) 
								VALUES ('$name', '$domain', '$member', '$supervisorName', '$year', '$semester', '$pType', '$des')");
			
			//can liao
			$dbSelect = "SELECT * FROM image img INNER JOIN project p ON (img.projectID = p.projectID)";
			
			//error msge all can but thn not recorded into database
           // if($dbInsertImg){
             //   $status = 'success'; 
				//header("Location: http://localhost/fyp/Preview Page.php");
				//$statusMsg = "File uploaded successfully."; 
				
            //}
			//else{ 
              //  $statusMsg = "File upload failed, please try again."; 
            //}
			if($dbInsertPrj){
                $status = 'success'; 
				header("Location: http://localhost/fyp/Preview Page.php");
				$statusMsg = "File uploaded successfully."; 
			}
			else{ 
                $statusMsg = "File upload failed, please try again.";  
			}
		}
		else{ 
            $statusMsg = 'Sorry, only PDF files are allowed to upload.'; 
        } 
    }
	else{ 
        $statusMsg = 'Please select an PDF file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
	
  
    // close connection
    mysqli_close($con);

?>