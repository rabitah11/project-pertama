<?php
$umur = $_POST['umur'];

if ($umur < 13) {
    echo "anak-anak";
} elseif ($umur >= 13 && $umur < 20) {
    echo "remaja";
} elseif ($umur >= 20 && $umur < 60) {
    echo "dewasa";
} else {
    echo "lansia";
}