<?php
$nip="120103019";
$nama="VANI JULIA WULANDARI";
$gaji_pokok=2000000;
$bonus=500000;
$tunjangan=(5/100)*$gaji_pokok;
$pajak=(10/100)*$gaji_pokok;
$gaji_bersih=($gaji_pokok+$bonus+$tunjangan)-$pajak;
echo"=======================================<br>";
echo"NIP 	= $nip<br>";
echo"Nama 	= $nama <br>";
echo"=======================================<br>";
echo"Gaji pokok	= $gaji_pokok <br>";
echo"Bonus		= $bonus<br>";
echo"Tunjangan	= $tunjangan <br>";
echo"Pajak		= $pajak <br>";
echo"=======================================<br>";
echo"Gaji yang harus dibayarkan = Rp".number_format($gaji_bersih);
?>