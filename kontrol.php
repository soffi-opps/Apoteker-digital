<?php
// Contoh data dummy, kamu bisa ganti dengan data dari database
$total_produk = 150;
$produk_masuk = 40;
$produk_keluar = 25;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontrol Stok</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .stok-card {
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .stok-title {
      font-weight: 600;
      color: #0d6efd;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <h3 class="text-center mb-4">Kontrol Stok</h3>
  <div class="row justify-content-center g-4">
    <div class="col-md-4">
      <div class="card stok-card text-center p-3">
        <h5 class="stok-title">Produk Masuk</h5>
        <h2 class="text-success"><?php echo $produk_masuk; ?></h2>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card stok-card text-center p-3">
        <h5 class="stok-title">Total Produk</h5>
        <h2 class="text-primary"><?php echo $total_produk; ?></h2>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card stok-card text-center p-3">
        <h5 class="stok-title">Produk Keluar</h5>
        <h2 class="text-danger"><?php echo $produk_keluar; ?></h2>
      </div>
    </div>
  </div>
</div>

</body>
</html>
