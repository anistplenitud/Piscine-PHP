<?php
	session_start();
	$username = $_POST['username'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$id = $_POST['id_no'];
	$passwd = hash('whirlpool',$_POST['password']);

	$array_users = array();
	$filename = "private/users";

	if (!$name || !$passwd || !$surname || !$id || !$username)
	{
		echo $username;
		echo $name;
		echo $email;
		echo $id;
		echo $passwd;
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
				if ($user["email"] === $email) {
					echo "This email is already in use\nUser was not Created.\n";
					exit();
				}
			}
		}
		else
		{
			if (!file_exists("private"))
				mkdir("private");
		}
		$array_users[] = array("name" => $name, "surname" => $surname, "username" => $username, "email" => $email, "id"=> $id, "passwd"=> $passwd);
		$data = serialize($array_users);
		file_put_contents($filename, $data);
		$_session['username'] = $username;
 		echo $passwd;
		echo "OK\n";
	}
?>