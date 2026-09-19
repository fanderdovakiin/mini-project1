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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f5f6fa;
            color: #2d2d2d;
        }
        h1 {
            margin-bottom: 5px;
        }
        p.info {
            color: #555;
            margin-top: 0;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #e0e0e0;
            padding: 10px 12px;
            text-align: left;
        }
        th {
            background-color: #34495e;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .kritis {
            background-color: #f8d7da !important; /* baris stok kritis */
        }
    </style>
</head>
<body>

    <h1>Product Information System</h1>
    <p class="info">Total Nilai Stok Gudang: <strong>Rp <?= number_format($totalNilaiStok, 0, ',', '.') ?></strong></p>

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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f5f6fa;
            color: #2d2d2d;
        }
        h1 {
            margin-bottom: 5px;
        }
        p.info {
            color: #555;
            margin-top: 0;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #e0e0e0;
            padding: 10px 12px;
            text-align: left;
        }
        th {
            background-color: #34495e;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .kritis {
            background-color: #f8d7da !important; /* baris stok kritis */
        }
    </style>
</head>
<body>

    <h1>Product Information System</h1>
    <p class="info">Total Nilai Stok Gudang: <strong>Rp <?= number_format($totalNilaiStok, 0, ',', '.') ?></strong></p>

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
