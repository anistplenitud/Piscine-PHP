<?php
	class Tyrion extends Lannister {
		public function sleepWith($obj) {
			if ($obj instanceof Cersei)
				print "Not even if I'm drink!".PHP_EOL;
			else if ($obj instanceof Sansa)
				print "Let's do this.".PHP_EOL;
			else if ($obj instanceof Jaime)	
				print "Not even if I'm drink!".PHP_EOL;
		}
	}
?>
