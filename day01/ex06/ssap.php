#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$a = array();
		foreach($argv as $arg)
		{
			if ($arg != $argv[0])
			{
				$str = trim($arg);
				$str = explode(" ", $str);
				foreach ($str as $word)
				{
					if (strlen($word) > 0)
					{
						array_push($a, $word);
					}
				}
			}
		}
	}
	sort($a);
	foreach ($a as $element)
	{
		echo $element."\n";
	}
?>
