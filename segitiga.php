<?php
$alas = 8;
$sisimiring = 8;

$tinggisegitiga = sqrt ($sisimiring ** 2 - (0.5 * $alas) ** 2);
$hasil = round($tinggisegitiga, 2);
echo "Tinggi segitiga : $hasil";