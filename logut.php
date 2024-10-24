<?php
session_start();
session_destroy(); // Hapus semua session

// Redirect ke halaman logout view
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
        }

        .logout-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .logout-container h1 {
            font-size: 2rem;
            color: #4CAF50;
        }

        .logout-container p {
            margin: 1rem 0;
            font-size: 1.2rem;
            color: #555;
        }

        .logout-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1.5rem;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>

    <div class="logout-container">
        <h1>You have been logged out</h1>
        <p>Thank you for using our service. See you again soon!</p>
        <a href="index.php" class="logout-btn">Go to Login</a>
    </div>

</body>
</html>
