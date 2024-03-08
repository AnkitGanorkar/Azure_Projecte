

<?php

$sname = "databasetargetlifter.mysql.database.azure.com";
$uname = "databasetargetlifter";
$password = "xN]3PxKgeT9,^NuxN]3PxKgeT9,^Nu";

$db_name = "targetlifter00";

$conn = new mysqli($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

?>
