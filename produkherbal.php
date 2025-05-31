<?php  
$koneksi = mysqli_connect("localhost", "root", "", "apotek_digital");  
  
$limit = 10;  
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;  
$mulai = ($halaman - 1) * $limit;  
$search = isset($_GET['search']) ? $_GET['search'] : '';  
  
// Hanya tampilkan produk yang nama_produk-nya mengandung 'Diapet' dari kategori Herbal  
$where = "WHERE kategori = 'Herbal' AND nama_produk LIKE ";  
if (!empty($search)){
    $where .= " AND nama_produk ";  

}
  if (!empty($search)){
    $whare =" AND nama_produk LIKE%$search%";

}  
  
$query = mysqli_query($koneksi, "SELECT * FROM produk $where LIMIT $mulai, $limit");  
$result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM produk $where");  
$total = mysqli_fetch_assoc($result)['total'];  
$pages = ceil($total / $limit);  
?>  
  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Produk Bayi</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <style>  
        .produk-grid {  
            display: flex;  
            flex-wrap: wrap;  
            gap: 20px;  
        }  
        .produk-item {  
            width: 20%;  
            box-shadow: 0 0 5px #ccc;  
            padding: 10px;  
            background: #fff;  
            border-radius: 5px;  
            text-align: center;  
        }  
        .produk-item img {  
            width: 100%;  
            height: 120px;  
            object-fit: cover;  
        }  
        @media(max-width: 768px){  
            .produk-item { width: 48%; }  
        }  
        @media(max-width: 480px){  
            .produk-item { width: 100%; }  
        }  
    </style>  
</head>  
<body class="bg-light">  
<div class="container py-4">  
    <h3 class="mb-4">Produk Bayi</h3>  
  
    <form method="GET" class="mb-3">  
        <input type="text" name="search" placeholder="Cari nama produk..." class="form-control" value="<?= htmlspecialchars($search) ?>">  
    </form>  
  
    <div class="produk-grid">  
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>  
            <div class="produk-item">  
                <img src="assetsimg/<?= $row['gambar'] ?>" alt="<?= $row['nama_produk'] ?>">  
                <h6><?= $row['nama_produk'] ?></h6>  
                <p>Rp<?= number_format($row['harga'], 0, ',', '.') ?></p>  
            </div>  
        <?php endwhile; ?>  
    </div>  
  
    <nav class="mt-4">  
        <ul class="pagination justify-content-center">  
            <?php for ($i = 1; $i <= $pages; $i++): ?>  
                <li class="page-item <?= $i == $halaman ? 'active' : '' ?>">  
                    <a class="page-link" href="?halaman=<?= $i ?>&search=<?= urlencode($search) ?>"><?= $i ?></a>  
                </li>  
            <?php endfor; ?>  
        </ul>  
    </nav>  
</div>  
</body>  
</html>
