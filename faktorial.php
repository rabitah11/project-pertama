<?php
// Menghitung faktorial
function hitungfaktorial($n) {
    $hasil = 1;
    for ($i = 1; $i <= $n; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Contoh penggunaan
$n = 5;
$faktorial = hitungfaktorial($n);
echo "Faktorial dari $n adalah: $faktorial";
?>


