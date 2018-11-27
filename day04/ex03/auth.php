<?php
function auth($login, $passwd)
{
	$filename = "../private/passwd";
	if (!$login || !$passwd)
	{
		return FALSE;
	}
	else
	{	
		$pass_wd = hash('whirlpool', $passwd);
		$array_users = array();
		$array_users = unserialize(file_get_contents($filename));
		foreach ($array_users as $user) {
			if ($user["login"] === $login && $user["passwd"] == $pass_wd) {
				return TRUE;
			}
		}
		return FALSE;
	}
}
?>
