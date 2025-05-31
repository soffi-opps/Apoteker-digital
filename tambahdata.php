<?php
$conn = new mysqli("localhost", "root", "", "apotek_digital");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];

    $stmt = $conn->prepare("INSERT INTO stok (kode_produk, nama_produk, harga_beli, stok, satuan, kategori, tanggal_kadaluarsa) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdisss", $kode_produk, $nama_produk, $harga_beli, $stok, $satuan, $kategori, $tanggal_kadaluarsa);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Data obat berhasil ditambahkan');window.location='stok_produk.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Data</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4 text-primary">Tambah Data </h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="kode_produk" class="form-label">Kode Obat</label>
            <input type="text" class="form-control" id="kode_produk" name="kode_produk" required />
        </div>

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required />
        </div>

        <div class="mb-3">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input type="number" step="0.01" class="form-control" id="harga_beli" name="harga_beli" required />
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required />
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" required />
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" required>
                <option value="" selected>-- Pilih Kategori --</option>
                <option value="Obat">Obat</option>
                <option value="Suplemen">Suplemen</option>
                <option value="Nutrisi">Nutrisi</option>
                <option value="Herbal">Herbal</option>
                <option value="Produk Bayi">Produk Bayi</option>
                <option value="Alat Kesehatan">Alat Kesehatan</option>
                <option value="Kecantikan">Kecantikan</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="tanggal_kadaluarsa" class="form-label">Tanggal Exp</label>
            <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required />
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="stok.php" class="btn btn-secondary ms-2">Batal</a>
    </form>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
