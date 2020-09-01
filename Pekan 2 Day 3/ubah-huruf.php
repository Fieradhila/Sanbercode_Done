<?php
function ubah_huruf($string){
	$huruf = "abcdefghijklmnopqrstuvwxyz";
	$tampung = "";
	$hitung = strlen($string);

	for($i = 0; $i < $hitung; $i++){
		$position = strpos($huruf, $string[$i]); //untuk mengetaui letak posisi huruf terdapat dimana
		$tampung .= substr($huruf, $position+1, 1);
	}
	echo "Kata : " . $string . "<br> Hasil : " . $tampung . "<br><br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>