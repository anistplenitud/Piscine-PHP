<?php
	function ft_is_sort($tab)
	{
		$a = array();
		foreach ($tab as $elem)
		{
			$a[] = $elem;
		}
		sort($a);
		if ($a == $tab)
			return true;
		else
			return false;
	}
?>
