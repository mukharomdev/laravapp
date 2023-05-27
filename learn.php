<?php
	class Mobil {
		public $m;

		function jalan(){
			return "jalan";
		}
	}

	$mobil = new Mobil();
	echo $mobil->jalan();
?>