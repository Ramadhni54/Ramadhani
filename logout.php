<?php
session_start();
session_destroy(); // Hapus session untuk logout

// Redirect ke halaman login
header("Location: index.php");
exit();
?>
