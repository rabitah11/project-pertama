<?php

function buatSegitiga($tinggi)
{
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        } 
        echo "<br>";
    }
}

buatSegitiga(10);