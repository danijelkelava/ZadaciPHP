<?php 

$arr = array(1,2,3,4,10,-1);
function minNumber($arr){
   // stvorimo nove varijable largest i smallest i pridruzimo im neku vrijednost iz naseg niza
   $largest = $arr[0];
   $smallest = $arr[0];

   foreach ($arr as $num) {
    // foreach loopom i if/elseif statementom usporedimo sve brojeve iz naseg niza s varijablama tako da ce 
    // varijabli $num biti pridruzena najveca odnosno najmanja vrijednost zbog uvjeta u if/elseif
   	if ($num > $largest) {
   		$largest = $num;
   	}elseif ($num < $smallest) {
   		$smallest = $num;
   	}

   }
   echo $smallest;
}
//minNumber($arr);

function minNumberTwo($arr){
   
   $min = $arr[0];

   for ($i=0; $i <= count($arr)-1; $i++) { 
   	   if ($arr[$i] < $min) {
   	   	   $min = $arr[$i];
   	   }
   }
   echo $min;
}
minNumberTwo($arr);
?>