<?php
	/* Marketplace DB:
	$DBHOST = "localhost:3306";
	$DBUSER = "nikhilnl_prouser";
	$DBPWD = "prouser";
	$DBNAME = "nikhilnl_projectdatabase";*/

	function open_db_conn() {
		$servername = "localhost:3306";
        $username = "nikhilnl_prouser";
        $password = "prouser";
        $dbname = "nikhilnl_projectdatabase";
    
        $conn =  mysqli_connect($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    		return NULL;
		} 
		return $conn;
	}

	function close_db_conn($conn){
		// Close MySQL connection
		mysqli_close($conn);
	}

?>