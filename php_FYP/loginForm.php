<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "fyp";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 

<?php

	session_start();
    $adminID = $_POST['adminID'];  
    $adminPW = $_POST['adminPW'];  
      
        //to prevent from mysqli injection  
        $adminID = stripcslashes($adminID);  
        $adminPW = stripcslashes($adminPW);  
        $adminID = mysqli_real_escape_string($con, $adminID);  
        $adminPW = mysqli_real_escape_string($con, $adminPW); 
      
        $sql = "select * from admin where adminID = '$adminID' and adminPW = '$adminPW'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
			$_SESSION['admin'] = true;		
            header("location:http://localhost/fyp/Home Page.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  