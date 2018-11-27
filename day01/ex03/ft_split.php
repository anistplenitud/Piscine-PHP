<?php
	function ft_split($str)
	{
		$a = array();
		$split = explode(" ", $str);
		sort($split);
		foreach ($split as $elem)
		{
			if (strlen($elem) > 0)
			{
				array_push($a, $elem);
			}
		}
		return $a;
	}

?>
