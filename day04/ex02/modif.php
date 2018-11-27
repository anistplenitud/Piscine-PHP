<?php
	$login = $_POST['login'];
	$pass_wd = $_POST['oldpw'];
	$newpass_wd = $_POST['newpw'];
	$submit = $_POST['submit'];
	$array_users = array();
	$filename = "../private/passwd";

	if ($submit != 'OK' || !$login || !$pass_wd || !$newpass_wd)
	{
		echo "ERROR\n";
		exit();
	}
	else
	{
		$passwd = hash('whirlpool',$pass_wd);
		$newpasswd = hash('whirlpool', $newpass_wd);
		if (file_exists($filename))
		{
			$array_users = unserialize(file_get_contents($filename));
			$i = 0;
			foreach ($array_users as $user) {
				if ($user["login"] === $login && $user["passwd"] == $passwd) {
					$array_users[$i] = array('login' => $login, 'passwd' => $newpasswd);
					$data = serialize($array_users);
					file_put_contents($filename, $data);
					echo "OK\n";
					exit();
				}
				$i++;
			}
			echo "ERROR\n";
		}
		else
		{
			echo "ERROR\n";
			exit();
		}
	}
?>
