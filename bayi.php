<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "apotek_digital");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Konfigurasi pagination
$limit = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$mulai = ($halaman > 1) ? ($halaman * $limit) - $limit : 0;

// Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = !empty($search) ? "WHERE nama_produk LIKE '%$search%'" : "";

// Ambil data produk
$query = mysqli_query($koneksi, "SELECT * FROM produk $where LIMIT $mulai, $limit");
$result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM produk $where");
$total = mysqli_fetch_assoc($result)['total'];
$pages = ceil($total / $limit);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produk ApotekKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .produk-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: flex-start;
    }
    .produk-item {
      flex: 0 0 calc(20% - 20px);
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      padding: 10px;
      background: #fff;
      border-radius: 8px;
      text-align: center;
    }
    .produk-item img {
      width: 100%;
      height: 130px;
      object-fit: cover;
      border-radius: 5px;
    }
    @media (max-width: 768px) {
      .produk-item {
        flex: 0 0 calc(50% - 20px);
      }
    }
    @media (max-width: 480px) {
      .produk-item {
        flex: 0 0 100%;
      }
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-4">
  <h3 class="mb-4">Produk Bayi</h3>

  <form class="input-group mb-4" method="get" action="">
    <input type="text" class="form-control" name="search" placeholder="Cari nama obat..." value="<?= htmlspecialchars($search) ?>">
    <button class="btn btn-primary" type="submit">Cari</button>
  </form>

  <div class="produk-grid">
    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
      <div class="produk-item">
        <img src="assetsimg/<?= $row['gambar'] ?>" alt="<?= $row['nama_produk'] ?>">
        <h6 class="mt-2 mb-1"><?= $row['nama_produk'] ?></h6>
        <p class="text-danger fw-bold">Rp<?= number_format($row['harga'], 0, ',', '.') ?></p>
      </div>
    <?php endwhile; ?>
  </div>

  <!-- Pagination -->
  <nav class="mt-4">
    <ul class="pagination justify-content-center">
      <?php for ($i =1 ; $i <= $pages; $i++) : ?>
        <li class="page-item <?= ($i == $halaman) ? 'active' : '' ?>">
          <a class="page-link" href="?halaman=<?= $i ?>&search=<?= urlencode($search) ?>"><?= $i ?></a>
        </li>
      <?php endfor; ?>
    </ul>
  </nav>
</div>

</body>
</html>
