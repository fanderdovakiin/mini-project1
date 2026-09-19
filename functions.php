<?php

// Processing Layer
// Berisi fungsi untuk mengolah data produk.

// Menghitung total nilai seluruh stok (harga x stok, dijumlahkan semua produk)
function hitungTotalNilaiStok($products)
{
    $total = 0;

    foreach ($products as $item) {
        $total += $item["harga"] * $item["stok"];
    }

    return $total;
}

?>
