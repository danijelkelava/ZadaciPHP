<?php 
// rekurzivna funkcija je funkcija koja poziva samu sebe
// pozivat ce se dok $m ne bude 0

function power($n, $m){

	if ($m == 0) {
		return 1;
	}
	elseif ($m < 0) {
		return 1 / ($n * power($n, -$m - 1));
	}
	else{
		return $n * power($n, $m - 1);
	}
}
echo power(2,6);
?>