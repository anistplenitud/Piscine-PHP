<?php

include 'auth.php';

session_start();
$passwd = $_GET['passwd'];
$login = $_GET['login'];

$authent = auth($login, $passwd);
if ($authent) {
	$_SESSION["loggued_on_user"] = $login;
	echo "OK\n";
}
else
{
	$_SESSION["loggued_on_user"] = '';
	echo "ERROR\n";
}
 
?>
