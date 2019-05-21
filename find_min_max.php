<?php
	echo "<b style='color:red;'>Finding Max and Min value from an array without using the built-in function (max and min).</b>"."<br>";
	$arr = array(1,2,3,4,5,6,7,8,9,10);
	$max = $arr[0];
	$min = $arr[0];
	for ($i = 1 ; $i < 10 ; $i++){
		if($max < $arr[$i]){
			$max = $arr[$i];
		}
		if($min > $arr[$i]){
			$min = $arr[$i];
		}
	}
	echo "Max = ".$max."<br>";
	echo "Min = ".$min."<br>";
	
?>