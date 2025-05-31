<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $valid_username = "admin";
    $valid_password = "123456";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dasbhord.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Akun</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container h2 {
            margin-bottom: 10px;
            color: #333;
            font-weight: 700;
        }

        .login-container p {
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #444;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 0 2px rgba(37,117,252,0.1);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #2575fc;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-btn:hover {
            background-color: #1a5fe0;
        }

        .bottom-text {
            margin-top: 20px;
            font-size: 13px;
            color: #555;
        }

        .bottom-text a {
            color: #2575fc;
            font-weight: 600;
            text-decoration: none;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Akun</h2>
    <p>Mulai gunakan Apotek Digital sekarang!</p>

    <?php if (!empty($error)) : ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" id="username" name="username">
        </div>

        <div class="input-group">
            <label for="password">password</label>
            <input type="password" id="password" name="password" >
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="bottom-text">
        Belum punya akun? <a href="register.php">Daftar Sekarang</a>
    </div>
</div>

</body>
</html>
