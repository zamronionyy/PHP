<?php
    $pemasukan = 50000000;
    $hutang_a = 16500000;
    $bunga_hutang_a = 0.05; // 5%
    $hutang_b = 9500000;
    $bunga_hutang_b = 0.045; // 4.5%

    $sisa_uang = $pemasukan - ($hutang_a + $hutang_b);
    $total_bunga_hutang = ($hutang_a * $bunga_hutang_a) + ($hutang_b * $bunga_hutang_b);
    $total_hutang = $hutang_a + $hutang_b;

    echo "Sisa uang: " . number_format($sisa_uang);
    echo "\n";
    echo "Total bunga hutang: " . number_format($total_bunga_hutang);
    echo "\n";
    echo "Total hutang: " . number_format($total_hutang);
?>