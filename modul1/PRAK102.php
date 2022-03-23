<?php 
$jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
define("KONSTANTA", 3.14);


//rumus kerucut adalah 1/3 × πr2 × t.
$kerucut = 1/3 * (KONSTANTA * ($jarijari*$jarijari)) * $tinggi;

echo round ($kerucut, 3);
echo " m3";

?>
