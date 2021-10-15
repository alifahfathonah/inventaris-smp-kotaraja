<?php
// Hubungkan ke file koneksi
include '../../koneksidb.php';
// Menjalankan function hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    delete($id);
}

// Funtion Read 
function read()
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

// Function Create 
function create($data)
{
    global $conn;
    $nm_tempat = htmlspecialchars($data["nm_tempat"]);
    $kode = htmlspecialchars($data["kode"]);

    $sql = "INSERT INTO tempat VALUES (NULL,'$nm_tempat','$kode')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "
            <script>
                document.location.href='index.php?info=1';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan');
            </script>
        ";
    }
}

// function delete 
function delete($id)
{
    global $conn;
    $sql = "DELETE FROM tempat WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "
            <script>
                document.location.href='index.php?info=3';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
            </script>
        ";
    }
}
// function edit
function edit($id)
{
    global $conn;

    $sql = "SELECT * FROM tempat WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;
}

// function update
function update($data, $id)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nm_tempat = htmlspecialchars($data["nm_tempat"]);
    $kode = htmlspecialchars($data["kode"]);

    $sql = "UPDATE tempat SET nm_tempat='$nm_tempat', kode='$kode' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "
            <script>
                document.location.href='index.php?info=2';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
            </script>
        ";
    }
}
