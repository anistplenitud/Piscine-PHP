<?php
	Class NightsWatch {

		private	$men = array();
		public function recruit($boy)
		{
			$this->$men[] = $boy;
		}

		public function fight()
		{
			foreach ($this->$men as $man)
			{
				if ($man instanceof IFighter)
					$man->fight();
			}
		}
	}
?>
