<?php
	session_start();

	$submit = $_GET['submit'];
	$login = $_GET['login'];
	$passwd = $_GET['passwd'];

	if ($submit == "OK")
	{
		$_SESSION['login'] = $login;
		$_SESSION['passwd'] = $passwd;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ex00</title>
</head>
<body>
	<form action="index.php" method="GET" name="index" value ="sb">
		Username : <input type="text" name="login">
		 <br />
		Passowrd : <input type="password" name="passwd" value = "beeone">
		<input type="submit" name="submit" value="OK">
	</form>

</body>
</html>