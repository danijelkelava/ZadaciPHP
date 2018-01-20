<?php 
function locastic(){

	for ($i = 1; $i <= 100; $i++)
	{
	    if($i % 3 == 0 && $i % 5 ==0){
	        echo "LOCASTIC<br />";
	    }
	    else if($i % 3 == 0){
	        echo "LOCA<br />";
	    }
	    else if($i % 5 == 0){
	        echo "STIC<br />";
	    }
	    else {
	        echo $i."<br />";
	    }
	}
}
locastic();

?>