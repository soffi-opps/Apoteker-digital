<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Loading...</title>
  <meta http-equiv="refresh" content="5;url=login.php">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      width: 100%;
      font-family: 'Segoe UI', sans-serif;
      position: relative;
    }

    .background-image {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .top-left-logos {
      position: absolute;
      top: 20px;
      left: 20px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      z-index: 2;
    }

    .top-left-logos img {
      height: 50px;
    }

    .text-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
      z-index: 2;
    }

    .text-center h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .text-center p {
      font-size: 20px;
    }

    @media (max-width: 768px) {
      .text-center h1 {
        font-size: 32px;
      }

      .text-center p {
        font-size: 16px;
      }

      .top-left-logos img {
        height: 40px;
      }
    }
  </style>
</head>
<body>

  <!-- Background image full screen -->
  <img src="dokter(2).jpg" alt="Background Apotek" class="background-image">

  
  <!-- Teks Tengah -->
  <div class="text-center">
    <h1>MY APOTIK</h1>
    <p>APOTIK DIGITAL TERBAIK</p>
  </div>

</body>
</html>
