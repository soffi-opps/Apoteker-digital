<?php
$conn = new mysqli("localhost", "root", "", "apotek_digital");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM stok_produk ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Obat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff; /* Biru */
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #007bff; /* Tombol Edit Biru */
            color: white;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-tambah {
            background-color: #28a745;
            color: white;
            padding: 10px 16px;
            margin-bottom: 15px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Stok Produk</h2>
    <a href="tambahdata.php" class="btn-tambah">+ Tambah</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Kode produk </th>
            <th>Nama produk</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Satuan</th>
            <th>Kategori</th>
            <th>Tanggal Exp</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['kode_produk']); ?></td>
            <td><?= htmlspecialchars($row['nama_produk']); ?></td>
            <td>Rp. <?= number_format($row['harga_beli'], 0, ',', '.'); ?></td>
            <td><?= $row['stok']; ?></td>
            <td><?= htmlspecialchars($row['satuan']); ?></td>
            <td><?= htmlspecialchars($row['kategori']); ?></td>
            <td><?= $row['tanggal_kadaluarsa']; ?></td>
            <td>
                <a href="edit_obat.php?id=<?= $row['id']; ?>" class="btn btn-edit">✎</a>
                <a href="hapus_obat.php?id=<?= $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">🗑️</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
