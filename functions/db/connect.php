<?php
// TEST
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_CHARSET', 'utf8');
// define('DB_NAME', 'growfund');
// LIVE
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'growfund_admin');
define('DB_PASSWORD', '&N4?$s_;xWbJ');
define('DB_CHARSET', 'utf8');
define('DB_NAME', 'growfund_core');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$connection){
	echo "Failed to connect database" . die(mysqli_error($connection));;
}
$dbselect = mysqli_select_db($connection, DB_NAME);
if(!$dbselect){
	echo "Failed to Select database" . die(mysqli_error($connection));
}