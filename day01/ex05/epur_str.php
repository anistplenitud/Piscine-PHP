#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$str = trim($argv[1]);
		$str = preg_split('/ +/', $str);
		$str = implode(" ", $str);
		echo $str."\n";
	}
?>
