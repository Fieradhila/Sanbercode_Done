<?php
function tentukan_deret_aritmatika($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre> Hasil : ";
	$deret = count($arr);
	if ($deret <= 1) {
		return "True";
	}
	$geo = $arr[1]-$arr[0];
	for ($i=1; $i < $deret; $i++) { 
		if (($arr[$i]-$arr[$i-1] != $geo)) {
			return "False<br>";
		}
	}
	return "True<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>