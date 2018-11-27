#!/usr/bin/php
<?php
	function o_string($str)
	{
		$a = array();
		$str = explode(" ", $str);
		foreach ($str as $word)
		{
			if (strlen($word) > 0)
			{
				array_push($a, $word);
			}
		}
		return $a;
	}

	if ($argc > 1)
	{
		$str = trim($argv[1]);
		$a = o_string($str);
		for ($i = 1; $i < sizeof($a); $i++)
		{
			echo $a[$i]." ";
		}
		echo $a[0]."\n";
	}
?>
