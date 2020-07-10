<?php
    define('VERSION', 'V 1.0.0');
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_NAME', 'hms');
	
	define('GROUP_LINK', 'http://'.$_SERVER['HTTP_HOST'] . "/hms/groups.php");
	
	
	
	
	// database connections
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>