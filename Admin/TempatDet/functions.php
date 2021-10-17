<?php
// Hubungkan ke file koneksi
include '../../koneksidb.php';
// Menjalankan function hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    delete($id);
}

// Funtion Read 
function read($limit = '')
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT tempat_det.*,tempat.nm_tempat,barang.nm_barang FROM tempat_det INNER JOIN tempat ON tempat_det.tempat_id=tempat.id INNER JOIN barang ON tempat_det.barang_id=barang.id $limit");
    // Ambil data
    $rows = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $rows[] = $data;
    }
    return $rows;
}
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
function readBarang()
{
    global $conn;
    // Query database
    $query = mysqli_query($conn, "SELECT * FROM barang ORDER BY nm_barang");
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
    $tempat_id = htmlspecialchars($data["tempat_id"]);
    $barang_id = htmlspecialchars($data["barang_id"]);
    $baik = htmlspecialchars($data["baik"]);
    $sedang = htmlspecialchars($data["sedang"]);
    $rusak = htmlspecialchars($data["rusak"]);
    $ket = htmlspecialchars($data["ket"]);

    $jmlh = $baik + $sedang + $rusak;

    // gambar

    $ekstensi = explode(".", $_FILES['gambar']['name']);
    $folderLama = $_FILES['gambar']['tmp_name'];
    $gambar = time() . "." . end($ekstensi);
    $lokasi_gambar = "../../assets/gambar/{$gambar}";
    // Copy file
    move_uploaded_file($folderLama, $lokasi_gambar);
    if (!$folderLama) {
        $gambar = 'kosong.png';
    }

    $sql = "INSERT INTO tempat_det VALUES (NULL,'$tempat_id','$barang_id','$jmlh','$baik','$sedang','$rusak','$gambar','$ket')";
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

    $sql = "SELECT * FROM tempat_det WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $gambar = $data['gambar'];

    if ($gambar == 'kosong.png') {
        # code...
    } else {
        file_exists("../../assets/gambar/$gambar");
        unlink("../../assets/gambar/$gambar");
    }


    $sql = "DELETE FROM tempat_det WHERE id=$id";
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

    $sql = "SELECT * FROM tempat_det WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;
}

// function update
function update($data, $id)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $tempat_id = htmlspecialchars($data["tempat_id"]);
    $barang_id = htmlspecialchars($data["barang_id"]);
    $baik = htmlspecialchars($data["baik"]);
    $sedang = htmlspecialchars($data["sedang"]);
    $rusak = htmlspecialchars($data["rusak"]);
    $ket = htmlspecialchars($data["ket"]);

    $jmlh = $baik + $sedang + $rusak;

    // gambar

    $ekstensi = explode(".", $_FILES['gambar']['name']);
    $folderLama = $_FILES['gambar']['tmp_name'];
    $gambar = time() . "." . end($ekstensi);
    $lokasi_gambar = "../../assets/gambar/{$gambar}";
    // Cek apakah gambar diganti
    if ($folderLama) {
        $sql_gambar = "SELECT * FROM tempat_det WHERE id=$id";
        $query_gambar = mysqli_query($conn, $sql_gambar);
        $data_gambar = mysqli_fetch_assoc($query_gambar);
        $gambar_lama = $data_gambar['gambar'];
        // Menghapus Gambar Lama
        if ($gambar_lama == 'kosong.png') {
            # code...
        } else {
            file_exists("../../assets/gambar/$gambar_lama");
            unlink("../../assets/gambar/$gambar_lama");
        }
        // Mengganti ke gambar yang baru
        move_uploaded_file($folderLama, $lokasi_gambar);
        $sql = "UPDATE tempat_det SET tempat_id='$tempat_id', barang_id='$barang_id', jmlh='$jmlh', baik='$baik', sedang='$sedang', rusak='$rusak', gambar='$gambar', ket='$ket' WHERE id=$id";
    } else {
        $sql = "UPDATE tempat_det SET tempat_id='$tempat_id', barang_id='$barang_id', jmlh='$jmlh', baik='$baik', sedang='$sedang', rusak='$rusak', ket='$ket' WHERE id=$id";
    }

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
