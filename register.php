<?php
// Mulai sesi
session_start();

// Tangani pengiriman formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validasi sederhana (sebaiknya gunakan database dan validasi yang tepat di produksi)
    if (!empty($username) && !empty($password)) {
        // Pendaftaran berhasil (untuk tujuan demo, Anda mungkin menyimpan data ini dalam database)
        $_SESSION['message'] = "Pendaftaran berhasil. Silakan masuk.";
        header("Location: login.php"); // Alihkan ke halaman login setelah pendaftaran
        exit;
    } else {
        $error = "Harap isi kedua kolom.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        /* Gaya mirip dengan halaman login */
        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #1C1C1C;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .register-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 400px;
            max-width: 90%;
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
            color: #00d4ff;
            margin-bottom: 20px;
        }

        .input-box {
            margin: 15px 0;
            position: relative;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
            font-size: 16px;
        }

        .register-button {
            background-color: #FF5733;
            border: none;
            padding: 12px 20px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .register-button:hover {
            background-color: #E74C3C;
        }

        .error-message {
            color: #FF5733;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Daftar</h2>
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="register.php" method="POST">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="register-button">Daftar</button>
        </form>
    </div>
</body>
</html>
