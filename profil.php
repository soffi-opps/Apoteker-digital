<?php
$nama = "Soffi Putrisalsabila";
$email = "soffiputrisalsabila@gmail.com";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Pengguna</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .bottom-nav {
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top: 1px solid #ccc;
      background: #fff;
      z-index: 1000;
    }
    .nav-item i {
      font-size: 20px;
    }
    .scroll-area {
      padding-bottom: 80px;
    }
    .icon-blue {
      color: #007bff;
    }
  </style>
</head>
<body>

<div class="container mt-3 scroll-area">
  <div class="card mb-3 p-3">
    <div class="d-flex align-items-center">
      <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
      <div>
        <h5 class="mb-0"><?= $nama ?></h5>
        <small><?= $email ?></small>
    
      </div>
    </div>
  </div>

  <div class="alert alert-info">
    <strong><?= strtok($nama, " ") ?>, Lengkapi Akunmu!</strong> <a href="#">Atur Kata Sandi</a>
  </div>

  <div class="d-flex justify-content-around text-center my-3">
    <a href="tambahproduk.php" class="text-decoration-none">
      <i class="fas fa-plus-circle fa-2x icon-blue"></i><br>
      <small>Tambah Produk</small>
    </a> 
    <a href="stok_produk.php" class="text-decoration-none">
      <i class="fas fa-box fa-2x icon-blue"></i><br>
      <small>Stok Produk</small>
    </a>
    <a href="kontrol.php" class="text-decoration-none">
      <i class="fas fa-check-circle fa-2x icon-blue"></i><br>
      <small>Kontrol Produk</small>
    </a>
  </div>

  <div class="mt-4">
    <h6>Transaksi & Chat</h6>
    <ul class="list-group mb-3">
      <li class="list-group-item"><i class="fas fa-comments me-2"></i>Chat</li>
      <li class="list-group-item"><i class="fas fa-undo me-2"></i>Credit Refund</li>
    </ul>

    <h6>Favorit Saya</h6>
    <ul class="list-group mb-3">
      <li class="list-group-item"><i class="fas fa-store me-2"></i>Penjual Favorit</li>
      <li class="list-group-item"><i class="fas fa-heart me-2"></i>Produk Favorit</li>
    </ul>

    <h6>Bantuan</h6>
    <ul class="list-group mb-5">
      <li class="list-group-item"><i class="fas fa-question-circle me-2"></i>Pusat Bantuan</li>
    </ul>
  </div>
</div>

<!-- Link Navigasi -->
<!-- Navigasi Bawah Gaya Aplikasi -->
<nav class="bottom-nav d-flex justify-content-around text-center py-2">
  <a href="dasbhord.php" class="text-decoration-none">
    <i class="fas fa-home icon-blue d-block"></i>
    <small>Home</small>
  </a>
  <a href="penjual.php" class="text-decoration-none">
    <i class="fas fa-user-tie icon-blue d-block"></i>
    <small>Penjual</small>
  </a>
  <a href="profil.php" class="text-decoration-none">
    <i class="fas fa-user icon-blue d-block"></i>
    <small>Profil</small>
  </a>
</nav>
<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
