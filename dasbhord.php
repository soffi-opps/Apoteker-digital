<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Apotek Digital</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .topbar {
      padding: 10px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .topbar input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      padding: 10px;
    }

    .category {
      text-align: center;
      background: white;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      text-decoration: none;
      color: inherit;
    }

    .category img {
      width: 40px;
      height: 40px;
      margin-bottom: 5px;
    }

    .section {
      padding: 10px;
    }

    .promo img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
      gap: 10px;
      max-height: 600px;
      overflow-y: auto;
    }

    .product-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 10px;
      text-align: center;
    }

    .product-card img {
      width: 100%;
      height: 120px;
      object-fit: cover;
      border-radius: 8px;
    }

    .product-name {
      font-size: 14px;
      margin-top: 8px;
      color: #333;
    }

    .product-price {
      color: #e53935;
      font-weight: bold;
      margin-top: 5px;
    }

    .product-discount {
      background-color: #ff9800;
      color: white;
      font-size: 12px;
      padding: 3px 6px;
      border-radius: 6px;
      display: inline-block;
      margin-top: 6px;
    }

    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-around;
      background-color: white;
      border-top: 1px solid #ddd;
      padding: 10px 0;
    }

    .bottom-nav a {
      text-align: center;
      font-size: 12px;
      text-decoration: none;
      color: #333;
    }
    .icon-blue {
  color: #007bff;
}
  </style>
</head>
<body>

<div class="topbar">
  <input type="text" placeholder="Cari produk untuk buah hati">
</div>

<div class="categories">
  <a href="produk.php" class="category">
    <img src="obat.png.jpg" alt="Obat">
    <div>Obat</div>
  </a>
  <a href="produksuplement.php" class="category">
    <img src="logo suplemen.png.jpg" alt="Suplement">
    <div>Suplement</div>
  </a>
  <a href="produknutrisi.php" class="category">
    <img src="logo nutrsi.png.jpg" alt="Nutrisi">
    <div>Nutrisi</div>
  </a>
  <a href="produkherbal.php" class="category">
    <img src="logo herbal.png.jpg" alt="Herbal">
    <div>Herbal</div>
  </a>
  <a href="bayi.php" class="category">
    <img src="produk bayi.png.jpg" alt="Produk Bayi">
    <div>Produk Bayi</div>
  </a>
  <a href="alat kesehatan.php" class="category">
    <img src="kesehatan.png.jpg" alt="Alat Kesehatan">
    <div>Alat Kesehatan</div>
  </a>
  <a href="kecantikan.php" class="category">
    <img src="logo kecantikan.png.jpg" alt="Kecantikan">
    <div>Kecantikan</div>
  </a>
  <a href="lainnya.php" class="category">
    <img src="logo lainya.png.jpg" alt="Lainnya">
    <div>Lainnya</div>
  </a>
</div>

<div class="section">
  <h3>Produk Hemat Pilihan</h3>
  <div class="promo">
    <img src="logo diskon.png.jpg" width="120"  height="160" alt="Promo Diskon">
  </div>
  
  <div class="product-grid" style="gap: 16px; padding-bottom: 100px;">
    <!-- Produk 1 -->
    <div class="product-card" style="height: 280px;">
      <img src="glucomint.png" alt="Produk 1">
      <div class="product-name">glucomint</div>
      <div class="product-price">Rp 117000</div>
      <div class="product-discount">DISKON10%</div>
    </div>
    <!-- Produk 2 -->
    <div class="product-card" style="height: 280px;">
      <img src="folavit.jpg" alt="Produk 2">
      <div class="product-name">Folavit</div>
      <div class="product-price">Rp 140000</div>
      <div class="product-discount">DISKON20%</div>
    </div>
    <!-- Produk 3 -->
    <div class="product-card" style="height: 280px;">
      <img src="avt.jpeg" alt="Produk 3">
      <div class="product-name">Avortastine</div>
      <div class="product-price">Rp 144000</div>
      <div class="product-discount">DISKON5%</div>
    </div>
    <!-- Produk 4 -->
    <div class="product-card" style="height: 280px;">
      <img src="neprisol.jpg" alt="Produk 4">
      <div class="product-name">Neperisol</div>
      <div class="product-price">Rp 109.000</div>
      <div class="product-discount">DISKON10%</div>
    </div>
    <!-- Produk 5 -->
    <div class="product-card" style="height: 280px;">
      <img src="obat elkana.png.jpg" alt="Produk 5">
      <div class="product-name">Elkana</div>
      <div class="product-price">Rp 115.000</div>
      <div class="product-discount">DISKON5%</div>
    </div>
    <div class="product-card" style="height: 280px;">
      <img src="peptisol.jpeg" alt="Produk 4">
      <div class="product-name">Peptisol</div>
      <div class="product-price">Rp 110.000</div>
      <div class="product-discount">DISKON5%</div>
    </div>
    <div class="product-card" style="height: 280px;">
      <img src="tft.jpg" alt="Produk 4">
      <div class="product-name">Tofedex 25 Gram</div>
      <div class="product-price">Rp 120.000</div>
      <div class="product-discount">DISKON12%</div>
    </div>
    <div class="product-card" style="height: 280px;">
      <img src="bht.jpg" alt="Produk 4">
      <div class="product-name">Betahistine Mesilate</div>
      <div class="product-price">Rp 130.000</div>
      <div class="product-discount">DISKON20%</div>
    </div>
  </div>
</div>

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
  
<head>
  <meta charset="UTF-8">
  <title>Dashboard Apotek Digital</title>
  ...
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

</body>
</html>
