#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	function months($s)
	{
		if (preg_match("/[Jj]anvier/", $s))
			return 1;
		else if (preg_match("/[Ff]évrier/", $s))
			return 2;
		else if (preg_match("/[Mm]ars/", $s))
			return 3;
		else if (preg_match("/[Aa]vril/", $s))
			return 4;
		else if (preg_match("/[M]ai/", $s))
			return 5;
		else if (preg_match("/[Jj]uin/", $s))
			return 6;
		else if (preg_match("/[Jj]uillet/", $s))
			return 7;
		else if (preg_match("/[Aa]oût/", $s))
			return 8;
		else if (preg_match("/[Ss]eptembre/", $s))
			return 9;
		else if (preg_match("/[Oo]ctrobre/", $s))
			return 10;
		else if (preg_match("/[Nn]ovembre/", $s))
			return 11;
		else if (preg_match("/[Dd]écembre/", $s))
			return 12;
		else
			return "-1";
	}

	function day($s)
	{
		if (preg_match('/[Dd]imanche/', $s))
			return 1;
		else if (preg_match('/[Ll]undi/', $s))
			return 2;
		else if (preg_match('/[Mm]ardi/', $s))
			return 3;
		else if (preg_match('/[Mm]ercredi/', $s))
			return 4;
		else if (preg_match('/[Jj]eudi/', $s))
			return 5;
		else if (preg_match('/[Vv]endredi/', $s))
			return 6;
		else if (preg_match('/[Ss]amedi/', $s))
			return 7;
		else
			return "-1";
	}

	function c_time($s)
	{
		$t = explode(":", $s);

		if (preg_match("/^[0-9]{2}$/", $t[0]) && preg_match("/^[0-9]{2}$/", $t[1]) && preg_match("/^[0-9]{2}$/", $t[2]))
			return $t;
		else
			return "-1";
	}

	if ($argc > 1)
	{
		$s = explode(" ", trim($argv[1]));
		if (sizeof($s) != 5)
		{
			echo "Wrong Format\n";
		}
		else
		{
			$day = day($s[0]);
			if ($day === "-1")
			{	
				echo "Wrong Format\n";
				exit();
			}
			if (preg_match("/[0-9]{4}/",$s[3]))
				$year = $s[3];
			else
			{
				echo "Wrong Format\n";
				exit();
			}
			if (preg_match("/[0-9]{2}/", $s[1]))
				$day_n = $s[1];
			else
			{
				echo "Wrong Format\n";
				exit();
			}
			$mon = months($s[2]);
			if ($mon === "-1")
			{
				echo "Wrong Format\n";
				exit();
			}
			$c = c_time($s[4]);
			if ($c === "-1")
			{
				echo "Wrong Format\n";
				exit();
			}
		

			$secs = mktime($c[0],$c[1],$c[2], $mon, $day_n, $year);
			echo $secs;
		}
	}

?>
