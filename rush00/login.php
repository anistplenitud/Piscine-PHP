<?php
	session_start();
	$username = $_POST['username'];
	$passwd = $_POST['password'];

	echo $username;
	echo $passwd;
	echo "string";
	function auth($login, $passwd)
	{
		$filename = "private/users";
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
			//	print_r($user."\n");
				if ($user["username"] === $login && $user["passwd"] == $pass_wd) {
					return $user;
				}
			}
			return FALSE;
		}
	}

	$current_user =  auth($username, $passwd);
	if (!$current_user){
		echo "Incorrect Username or Password\n";
	}
	else
	{
		echo " 3";
		print_r($current_user);
		$_session['username'] = $current_user['username'];
		$_session['']
	}
	header("Location : index.php");
?>