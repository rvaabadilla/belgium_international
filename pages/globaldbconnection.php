<?php
    //separate php file for managing db connections
    function get_db_connection(){
        $db_name = "dev_belgium"; 
    	$db_username = "dev_belgium";  
	    $db_pass = "";  
        $db_host = "localhost"; 
    
        $conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name) or die(mysqli_error()); //Connect to server
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return ;
        }
        return $conn;
    }
?>