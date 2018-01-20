<?php 

function palindrom($str){
	// funkcijom str_replace maknemo razmak izmedju rijeci
	// funkcijom strtolower sva slova budu mala (mozemo staviti i strtoupper)
	// ovo je radi korisnickog iskustva tj. ako korisnik npr. upise "Ana voli milovana", "ana voli milovana" ili "anavolimilovana" da rezultat bude isti

	$strStrip = strtolower(str_replace(' ', '', $str));
	$reversedStr = '';
	
	// for loopom ispisemo string unatrag
	for ($i=strlen($strStrip)-1; $i >= 0; $i--) { 
		$reversedStr .= $strStrip[$i];
	}
	
	// usporedimo varijable
	if ($strStrip == $reversedStr) {
		echo '"'.$str.'"'.' je palindrom.';
	}else{
		echo '"'.$str.'"'.' nije palindrom.';
	}
	
}
//palindrom('Ana voli milovana');


function palindromDva($str){
	$strStrip = strtolower(str_replace(' ', '', $str));

	// mozemo i php funkcijom strrev okrenuti string unatrag
	$reversedStr = strrev($strStrip);

	if ($strStrip == $reversedStr) {
		echo '"'.$str.'"'.' je palindrom.';
		return true;
	}else{
		echo '"'.$str.'"'.' nije palindrom.';
	}
}
palindromDva('Ana voli milovana');
?>