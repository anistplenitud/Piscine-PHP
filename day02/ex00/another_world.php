#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$s = trim($argv[1]);
		$s_clean = preg_replace('/[\s\t]+/', ' ', $s);

		echo $s_clean."\n";
	}
?>
