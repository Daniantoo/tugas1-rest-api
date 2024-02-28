<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'api_matkul');

$db_connect = mysqli_connect( HOST, USER, PASS, DB ) or die ('Unable connect');

?>

