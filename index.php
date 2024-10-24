<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Link ke Font Awesome untuk ikon mata -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #1C1C1C;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .login-container {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .logo img {
            width: 185px; /* Ukuran logo */
            height: auto;
            border-radius: 50%; /* Membuat logo melingkar */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .title {
            font-size: 38px;
            color: #FFFFFF;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            letter-spacing: 2px;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
            text-align: center;
            width: 400px;
            max-width: 90%; /* Membuat lebih responsif */
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #00d4ff;
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
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus {
            background-color: rgba(255, 255, 255, 0.3);
            outline: none;
            border: 1px solid #00d4ff;
            box-shadow: 0 0 10px rgba(0, 212, 255, 0.7);
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #00d4ff;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #FF5733; /* Warna ikon saat hover */
        }

        .login-button {
            background-color: #FF5733;
            border: none;
            padding: 12px 20px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            font-size: 18px;
        }

        .login-button:hover {
            background-color: #E74C3C;
            transform: scale(1.05);
        }

        .error-message {
            color: #FF5733;
            margin-top: 10px;
            font-size: 14px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer a {
            color: #00d4ff;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #FF5733;
        }

        /* Animasi Partikel */
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .logo img {
            animation: float 5s ease-in-out infinite;
        }

    </style>
</head>
<body>
    <div id="particles-js"></div> <!-- Particles effect -->

    <div class="login-container">
        <div class="logo">
            <img src="car.png" alt="Logo Rental Mobil"> <!-- Ganti dengan URL atau path logo Anda -->
        </div>
        <div class="title">Rental Mobil</div>
        <div class="login-box">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye" id="eye-icon"></i> <!-- Ikon mata -->
                    </span>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <?php if (isset($_GET['error'])): ?>
                <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <div class="footer">
                <p>Belum memiliki akun? <a href="register.php">Daftar</a></p>
            </div>
        </div>
    </div>

    <!-- Load Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- Particles.js config -->
    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 150,  // Meningkatkan jumlah partikel agar lebih merata
                    "density": {
                        "enable": true,
                        "value_area": 800  // Mengatur area distribusi partikel
                    }
                },
                "color": {
                    "value": "#00d4ff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 20,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#00d4ff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 3,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                }
            },
            "retina_detect": true
        });

        // Function to toggle password visibility
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('eye-icon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash'); // Change to 'hide' icon
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye'); // Change back to 'show' icon
            }
        }
    </script>
</body>
</html>
