<?php
session_start(); // Mulai session

// Hardcoded credentials (di dunia nyata, gunakan database dan hashing)
$valid_username = 'admin';
$valid_password = '123';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek login
if ($username === $valid_username && $password === $valid_password) {
    // Simpan informasi login ke session
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect ke dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Redirect kembali ke login dengan error
    header("Location: index.php?error=Invalid Username or Password");
    exit();
}
?>
