<?php
include '../koneksidb.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' ";

$query = mysqli_query($conn, $sql);

// Cek Jumlah Kolom dalam database
$cek = mysqli_num_rows($query);

// Jika Username dan Password Benar
if ($cek > 0) {
    // Membuat array assosiative
    $rows = mysqli_fetch_assoc($query);
    // Cek hak akses
    // Jika Hak akses Admin
    if ($rows['hak'] == 'admin') {
        $_SESSION['hak'] = 'admin';
        header('Location:../Admin');
    }
    // Jika Hak akses Kepsek
    elseif ($rows['hak'] == 'kepsek') {
        $_SESSION['hak'] = 'kepsek';
        header('Location:../Kepsek');
    }
} else {
    header('Location:login.php?pesan=1');
}
