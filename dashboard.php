<?php
session_start(); // Mulai session

// Cek apakah user sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rental Mobil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMv5W1g2sVPE0pErKkCw5S7k0Wg6OF0d3e8C4q" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDg5NzZ8MHwxfGFsbHwxfHx8fHx8fHwxNjE5NjMzNzA4&ixlib=rb-1.2.1&q=80&w=1080') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .navbar {
            background-color: #0056b3; /* Warna biru */
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
            position: relative;
            z-index: 1;
        }

        .card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s;
            text-align: center;
            position: relative;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .card h3 {
            padding: 1rem;
            background-color: #0056b3;
            color: white;
            margin-bottom: 0;
            font-size: 1.5rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon {
            font-size: 3rem;
            color: #0056b3; /* Warna biru */
            margin: 1rem 0;
        }

        .card-content {
            padding: 1.5rem;
            background: linear-gradient(180deg, #ffffff, #f9f9f9);
            position: relative;
        }

        .logout-btn {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 2rem auto;
            display: block;
            text-align: center;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.3s;
            z-index: 1;
        }

        .logout-btn:hover {
            background-color: #003f7f; /* Warna biru gelap */
            transform: translateY(-2px);
        }

        footer {
            margin-top: auto;
            text-align: center;
            background-color: #0056b3; /* Warna biru */
            color: white;
            padding: 1rem;
            position: relative;
            z-index: 1;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .navbar {
                font-size: 1.5rem;
            }

            .dashboard-container {
                padding: 1rem;
            }

            .card h3 {
                font-size: 1.2rem;
            }

            .icon {
                font-size: 2.5rem;
            }

            .logout-btn {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                font-size: 1.2rem;
            }

            .dashboard-container {
                grid-template-columns: 1fr; /* Menjadi satu kolom pada layar kecil */
            }

            .card h3 {
                font-size: 1rem;
            }

            .icon {
                font-size: 2rem;
            }

            .logout-btn {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <div class="navbar">
        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    </div>

    <div class="dashboard-container">
        <div class="card">
            <h3><i class="fas fa-car icon"></i> Mobil Tersedia</h3>
            <div class="card-content">
                <p>Lihat daftar mobil yang tersedia untuk disewa.</p>
            </div>
        </div>

        <div class="card">
            <h3><i class="fas fa-cogs icon"></i> Pengaturan</h3>
            <div class="card-content">
                <p>Atur preferensi akun Anda.</p>
            </div>
        </div>

        <div class="card">
            <h3><i class="fas fa-envelope icon"></i> Pesan</h3>
            <div class="card-content">
                <p>Cek pesan terbaru Anda.</p>
            </div>
        </div>

        <div class="card">
            <h3><i class="fas fa-chart-line icon"></i> Laporan</h3>
            <div class="card-content">
                <p>Amati laporan penjualan dan performa Anda.</p>
            </div>
        </div>

        <div class="card">
            <h3><i class="fas fa-chart-bar icon"></i> Analitik</h3>
            <div class="card-content">
                <p>Analisa lalu lintas website Anda.</p>
            </div>
        </div>

        <div class="card">
            <h3><i class="fas fa-question-circle icon"></i> Bantuan</h3>
            <div class="card-content">
                <p>Dapatkan dukungan dan info lebih lanjut.</p>
            </div>
        </div>

        <?php if ($_SESSION['role'] === 'admin'): ?>
        <div class="card">
            <h3><i class="fas fa-user-shield icon"></i> Manajemen Pengguna</h3>
            <div class="card-content">
                <p>Kelola pengguna dan hak akses mereka.</p>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>

    <footer>
        &copy; 2024 Your Rental Car Company. All rights reserved.
    </footer>

</body>
</html>