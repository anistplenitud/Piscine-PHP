#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$a = array();
		foreach ($argv as $arg)
		{
			if ($arg != $argv[0])
			{

				$word = trim($arg);
				$words = explode(" ", $word);
				foreach ($words as $str)
				{
					$str = trim($str);
					if (strlen($str) > 0)
						$a[] = $str;
				}
			}	
		}

		$ascii_arr = array();
		$alpha_arr = array();
		$num_arr = array();
		foreach ($a as $elem)
		{
			if (is_numeric($elem[0]))
			{
				$num_arr[] = $elem;
			}
			else if (ctype_alpha($elem[0]))
			{
				$alpha_arr[] = $elem;
			}
			else
			{
				$ascii_arr[] = $elem;
			}
		}
		natcasesort($alpha_arr);
		foreach ($alpha_arr as $str)
			echo $str."\n";
		rsort($num_arr);
		foreach ($num_arr as $num)
			echo $num."\n";
		natcasesort($ascii_arr);
		foreach ($ascii_arr as $asc)
			echo $asc."\n";
	}

?>
