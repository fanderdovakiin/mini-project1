<?php
// Presentation Layer
require_once "products.php";
require_once "functions.php";

$totalNilaiStok = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .kritis { background-color: #f8d7da; } /* baris stok kritis */
    </style>
</head>
<body>

    <h1>Product Information System</h1>
    <p>Total Nilai Stok Gudang: Rp <?= number_format($totalNilaiStok, 0, ',', '.') ?></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($products as $item): ?>
            <?php
                // Logika conditional: tandai baris jika stok kritis (< 3)
                $kelasBaris = ($item["stok"] < 3) ? "kritis" : "";
            ?>
            <tr class="<?= $kelasBaris ?>">
                <td><?= $item["id"] ?></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["kategori"] ?></td>
                <td>Rp <?= number_format($item["harga"], 0, ',', '.') ?></td>
                <td><?= $item["stok"] ?></td>
                <td><?= $item["deskripsi"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
