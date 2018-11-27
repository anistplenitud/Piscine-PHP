#!/usr/bin/php
<?php
	while (true)
	{
		echo "Enter a Number : ";	
		$input = fgets(STDIN);
		if (!$input)
		{
			exit("\n");
		}
		$input = trim($input);
		if (!is_numeric($input))
		{
			echo "'$input' is not a number\n";
		}
		else
		{
			if ($input % 2 == 0)
			{
				echo "The number $input is even\n";
			}
			else
			{
				echo "The number $input is odd\n";
			}
		}
	}
?>
