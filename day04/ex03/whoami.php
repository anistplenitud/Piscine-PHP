<?php
session_start();
$whoami = $_SESSION["loggued_on_user"];

if (!$whoami)
	echo "ERROR\n";
else
	echo $whoami."\n";
?>
