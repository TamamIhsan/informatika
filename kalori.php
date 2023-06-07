<?php

$IstirahatPerHari = array(5, 6, 8, 8, 5, 6, 4);
$IstirahatPerMinggu = array_sum($IstirahatPerHari);

$makananPerHari = array(3, 2, 2, 3, 3, 2, 1);
$kaloriPerMakanan = 2500;
$KaloriPerHari = array();

foreach ($makananPerHari as $makanan) {
    $KaloriPerHari[] = $makanan * $kaloriPerMakanan; 
}

$KaloriPerMinggu = 7 * array_sum($KaloriPerHari);
echo "KALORI";
echo "<br>";
echo "Jumlah kalori per hari dari Senin-Minggu: ";
foreach ($KaloriPerHari as $kalori) {
    echo $kalori . " kalori, ";
}
echo "<br>";

echo "Jumlah kalori per minggu: " . $KaloriPerMinggu . " kalori";
echo "<br>";
echo "<br>";

echo "ISTIRAHAT";
echo "</br>";
echo "Jumlah waktu istirahat per hari dari Senin-Minggu: ";
foreach ($IstirahatPerHari as $jam) {
    echo $jam . " jam, ";
}
echo "<br>";
echo "Jumlah waktu istirahat per minggu: " . $IstirahatPerMinggu . " jam";

echo "</br>";
echo "</br>";
echo "APAKAH FU SUDAH SEMBUHAN ATAU MASIH SAKIT?";
if ($KaloriPerMinggu >= 17500 && $IstirahatPerMinggu >= 56) {
    echo "Fu kembali sehat.";
} else {
    echo " Fu  masih sakit";
}
?>
