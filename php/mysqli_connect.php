<?php
DEFINE ('DB_USER', ' patientZero');
//DEFINE ('DB_PASSWORD', '1036');
//DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'professor1036!@#$');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'businessnews');
//DEFINE ('DB_NAME', 'students');
 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>