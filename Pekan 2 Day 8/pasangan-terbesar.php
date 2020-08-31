<?php
function pasangan_terbesar($angka){
	$couple = substr($angka, 0,2); //untuk mengambil banyak karakter
	$hitung = strlen($angka)-2; //untuk mengetahui banyaknya karakter string
	echo $hitung;
	for($i = 0; $i <= $hitung; $i++){
		$cari = substr($angka, $i, 2);
		if($cari > $couple){
			$couple = $cari;
		}
	}
	echo "Angka : " . $angka . "<br>";
	echo "Pasangan Angka Terbesar : " . $couple . "<br><br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>