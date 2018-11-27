<?php

function auth($login, $passwd)
{
	$filename = "private/users";
	if (!$login || !$passwd)
	{
		return FALSE;
	}
	else
	{	
		$pass_wd = hash('whirlpool', $passwd)
		$array_users = array();
		$array_users = unserialize(file_get_contents($filename));
		foreach ($array_users as $user) {
			if ($user["username"] === $login && $user["passwd"] == $pass_wd) {
				return TRUE;
			}
		}
		return FALSE;
	}
}
	
?>