<?php 
	class retiro extends base{

		public function actual($saldo,$retiro)
		{
			$actual=$saldo-$retiro;
			return $actual;
		}
	}



 ?>