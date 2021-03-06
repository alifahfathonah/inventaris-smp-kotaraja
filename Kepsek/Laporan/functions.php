<?php
// Hubungkan ke file koneksi
include '../../koneksidb.php';

function readTempatDet($tempat_id = '')
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT tempat_det.*,tempat.nm_tempat,barang.nm_barang FROM tempat_det INNER JOIN tempat ON tempat_det.tempat_id=tempat.id INNER JOIN barang ON tempat_det.barang_id=barang.id WHERE tempat_id LIKE '%$tempat_id'");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return $rows;
}

// Function Read 
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
    return $rows;
}

// Function Read 
function readBarang()
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT * FROM barang  ORDER BY nm_barang");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return $rows;
}

function tempatID($tempat_id = '')
{
    global $conn;
    // Query database
    $queryTempat_id = mysqli_query($conn, "SELECT tempat.*, tempat_det.tempat_id FROM tempat_det INNER JOIN tempat ON tempat_det.tempat_id=tempat.id WHERE tempat_id LIKE '%$tempat_id' GROUP BY tempat_det.tempat_id");
    // Ambil data
    $tempat_id = [];
    while ($data = mysqli_fetch_assoc($queryTempat_id)) {
        $tempat_id[] = $data;
    }
    return $tempat_id;
}
