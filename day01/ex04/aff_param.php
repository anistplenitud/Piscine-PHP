#!/usr/bin/php
<?php
	if ($argc > 1 )
	{
		foreach ($argv as $elem)
		{
			if ($elem != $argv[0])
				echo "$elem\n";
		}
	}
?>
