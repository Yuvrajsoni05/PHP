<?php

for($i = 1 ; $i <= 6; $i++)
{
	for($j = 1; $j <= $i; $j++){
		if($i == $j){
			echo $j;
		}
		else{
			echo $j." *";
		}
	}
	echo "<br>";
}

?>