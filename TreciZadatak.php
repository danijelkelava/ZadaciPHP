<?php 

$arr = array(1,1,1,1,2,2,5,5,5,5,5,5,5,5);
$repeated = array();
 function elementMaxPuta($arr){
 	$max = 0;
 	$max_item = $arr[0];
    
    // sortiramo broj ponavljanja nekog elementa
 	//$count = array_count_values($arr);    
	foreach($arr as $id){
	    if (!isset($repeated[$id])){
	    	$repeated[$id] = 0;
	    } 	    	
	    $repeated[$id]++;
	}
	//return $repeated;
	
    // foreach loopom i if statementom nadjemo najveci broj ponavljanja ($amount) nekog elementa i 
    // pridruzimo tu vrijednost $max varijabli i njezin pripadajuci $value $max_item varijabli
 	foreach ($repeated as $value => $amount) {
 		if($amount > $max){
 			$max = $amount;
 			$max_item = $value;
 		}
 	}
 	echo $max_item;
 }

elementMaxPuta($arr);

?>