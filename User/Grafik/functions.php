<?php
// Hubungkan ke file koneksi
include '../../koneksidb.php';
// Menjalankan function hapus
if (isset($_GET['barang'])) {
    $id = $_GET['barang'];
    echo grafikBarang();
}
if (isset($_GET['tempat'])) {
    $id = $_GET['tempat'];
    echo grafikTempat($id);
}

if (isset($_GET['tempat_barang'])) {
    $id = $_GET['tempat_barang'];
    echo readTempat();
}

// Function Grafik Barang 
function grafikBarang()
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT `barang_id`,nm_barang, SUM(jmlh) AS total FROM tempat_det INNER JOIN barang ON barang.id=tempat_det.barang_id GROUP BY `barang_id`  ORDER BY nm_barang;");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return json_encode($rows);
}
// Function Grafik Tempat
function grafikTempat($tempat_id = '')
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT nm_tempat,tempat_id,`barang_id`,nm_barang, SUM(baik) AS totalBaik, SUM(sedang) AS totalSedang, SUM(rusak) AS totalRusak FROM tempat_det INNER JOIN barang ON barang.id=tempat_det.barang_id INNER JOIN tempat ON tempat.id=tempat_det.tempat_id WHERE tempat_id=$tempat_id GROUP BY `barang_id`  ORDER BY tempat_id;");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return json_encode($rows);
}

// Function Read Tempat
function readTempat()
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT * FROM tempat ORDER BY nm_tempat");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return json_encode($rows);
}
