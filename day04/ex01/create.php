<?php
	$login = $_POST['login'];
	$pass_wd = $_POST['passwd'];
	$submit = $_POST['submit'];
	$array_users = array();
	$filename = "../private/passwd";

	if ($submit != 'OK' || !$login || !$pass_wd)
	{
		echo "ERROR\n";
		exit();
	}
	else
	{	
		if (file_exists($filename))
		{
			$array_users = unserialize(file_get_contents($filename));
			
			$t = sizeof($array_users);
			foreach ($array_users as $user) {
				if ($user["login"] === $login) {
					echo "ERROR\n";
					exit();
				}
			}
		}
		else
		{
			if (!file_exists("../private"))
				mkdir("../private");
		}
		$passwd = hash('whirlpool',$pass_wd);
		$array_users[] = array("login" => $login, "passwd" => $passwd);
		$data = serialize($array_users);
		file_put_contents($filename, $data);
		echo "OK\n";
	}
?>
