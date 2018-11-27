#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$a = trim($argv[1]);
		$op = trim($argv[2]);
		$b = trim($argv[3]);

		if ($op == '+')
			$result = $a + $b;
		else if ($op == '-')
			$result = $a - $b;
		else if ($op == '/')
			$result = $a / $b;
		else if ($op == '%')
			$result = $a % $b;
		else if ($op == '*')
			$result = $a * $b;

		echo $result."\n";
	}
	else
	{
		echo "Incorrect Parameters\n";
	}
?>
