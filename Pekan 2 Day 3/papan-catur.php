<?php

function papan_catur($angka) {
	echo "Ordo : " . $angka . "<br>";
	for ($i = 0; $i < $angka; $i++) { 
		for($j = 0; $j < ($angka*2)-1; $j++){
			if (($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1)) {
				echo "#";
			}else{
				echo "&nbsp;";
			}
		}
		echo "<br>";
	}
	echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/