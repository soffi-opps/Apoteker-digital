<?php
$showForm = true;
$nama = $email = $password = $referral = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $referral = $_POST['referral'] ?? '';

    // Simulasi proses simpan
    $pesan = "Pendaftaran berhasil! Selamat datang, <b>$nama</b>.";
    $showForm = false;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <style>
        body {
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
            background: #007bff;
            display: flex;
            justify-content: center;
            align-items: start;
            min-height: 100vh;
            padding: 30px 10px;
        }

        .form-container {
            background-color: #fff;
            padding: 25px 25px 35px;
            border-radius: 30px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .form-container h3 {
            color: #007bff;
            text-align: center;
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 15px;
            border: none;
            border-bottom: 1px solid #ccc;
            background: none;
            outline: none;
        }

        ::placeholder {
            color: #ccc;
            font-style: italic;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        }

        .submit-btn:hover {
            background-color: #0056c1;
        }

        .bottom-link {
            text-align: center;
            margin-top: 20px;
        }

        .bottom-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .pesan {
            background-color: #e0ffe0;
            padding: 15px;
            border: 1px solid #66cc66;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            color: #006600;
        }
    </style>
</head>
<body>

<div class="form-container">
    <?php if ($showForm): ?>
        <h3>Silahkan daftar untuk mulai Apotek Digital</h3>
        <form method="post" action="">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" placeholder="Ketik nama disini" required>

            <label for="email">Alamat Email</label>
            <input type="email" name="email" id="email" placeholder="Ketik alamat email aktif disini" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Ketik Password Akun Disini" required>

            <label for="referral">Kode Referal (Tidak Wajib)</label>
            <input type="text" name="referral" id="referral" placeholder="Diisi jika ada">

            <button type="submit" class="submit-btn">DAFTAR SEKARANG</button>
        </form>

        <div class="bottom-link">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </div>
    <?php else: ?>
        <div class="pesan">
            <?php echo $pesan; ?>
        </div>
    <?php endif;
