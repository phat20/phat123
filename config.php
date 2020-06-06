<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'draeeulrfzhkgk');
define('DB_PASSWORD', 'febea10a4b9b17aeab1aa7bc87963331569a42b5eb299dffaa313429275c20a1');
define('DB_NAME', 'dcoqvif3bvi46e');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
