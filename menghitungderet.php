<?php
// Menghitung deret Fibonacci
function hitungDeretFibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Contoh penggunaan 
$n = 10;
$deretFibonacci = hitungDeretFibonacci($n);
echo "Deret Fibonacci pertama $n angka adalah: ";
foreach ($deretFibonacci as $angka) {
    echo "$angka ";
}
?>