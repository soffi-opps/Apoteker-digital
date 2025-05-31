<?php
session_start();
$conn = new mysqli("localhost", "root", "", "apotek_digital");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'] ?? '';
    $harga = $_POST['harga'] ?? '';
    $kategori = $_POST['kategori'] ?? '';
    $apotek = $_POST['apotek'] ?? '';
    $lokasi = $_POST['lokasi'] ?? '';
    $rating = $_POST['rating'] ?? '';

    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $gambar_name = basename($_FILES['gambar']['name']);
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target_dir . $gambar_name);
        $gambar = $gambar_name;
    }

    if ($nama_produk && $harga && $kategori && $apotek && $lokasi && $rating) {
        $stmt = $conn->prepare("INSERT INTO produk (nama_produk, harga, kategori, apotek, lokasi, rating, gambar) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sdsssss", $nama_produk, $harga, $kategori, $apotek, $lokasi, $rating, $gambar);
        if ($stmt->execute()) {
            $_SESSION['sukses'] = 'Produk berhasil ditambahkan!';
            header("Location: tambahproduk.php");
            exit;
        } else {
            echo "<script>alert('Gagal menyimpan data: " . $stmt->error . "');</script>";
        }
    } else {
        echo "<script>alert('Lengkapi semua data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Produk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * { box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: 500;
    }
    input[type="text"],
    input[type="number"],
    select,
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      background-color: #fdfdfd;
    }
    .form-buttons {
      display: flex;
      justify-content: space-between;
    }
    input[type="submit"],
    .btn-cancel {
      padding: 12px 20px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    input[type="submit"] {
      background-color: #007bff;
      color: white;
    }
    .btn-cancel {
      background-color: #e0e0e0;
      color: #333;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }
    @media (max-width: 600px) {
      .form-buttons {
        flex-direction: column;
      }
      .btn-cancel {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>
  <?php
    if (isset($_SESSION['sukses'])) {
        echo "<script>alert('" . $_SESSION['sukses'] . "');</script>";
        unset($_SESSION['sukses']);
    }
  ?>
  <div class="form-container">
    <h2>Tambah Produk</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="nama_produk">Nama Produk</label>
      <input type="text" name="nama_produk" required>

      <label for="harga">Harga</label>
      <input type="number" name="harga" required>

      <label for="kategori">Kategori</label>
      <select name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="Obat">Obat</option>
        <option value="Suplemen">Suplemen</option>
        <option value="Nutrisi">Nutrisi</option>
        <option value="Herbal">Herbal</option>
        <option value="Produk bayi">produk bayi</option>
        <option value="Alkes">Alkes</option>
        <option value="kecantikan">kecantikan</option>
      </select>

      <label for="apotek">Nama Apotek</label>
      <input type="text" name="apotek" required>

      <label for="lokasi">Lokasi Apotek</label>
      <input type="text" name="lokasi" required>

      <label for="rating">Rating</label>
      <input type="number" step="0.1" name="rating" required>

      <label for="gambar">Gambar Produk</label>
      <input type="file" name="gambar" accept="image/*" required>

      <div class="form-buttons">
        <input type="submit" value="Tambah Produk">
        <a href="dashboard.php" class="btn-cancel">Batal</a>
      </div>
    </form>
  </div>
</body>
</html>
