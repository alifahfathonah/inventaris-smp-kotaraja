<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
$id = $_GET['id'];
$data = edit($id);

if (isset($_POST['simpan'])) {
    update($_POST, $id);
}

$tempat = readTempat();
$barang = readBarang();


$halaman = 'tempat detail'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah <?= $halaman ?></title>
    <!-- third party css -->
    <!-- Plugins css -->
    <link href="../../assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <link href="../../assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <?php include '../Layouts/header.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include '../Layouts/topbar.php' ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include '../Layouts/leftbar.php' ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>Silahkan menambah data <?= $halaman ?></p>
                                    <hr>
                                    <form method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>" />
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="tempat_id" class="form-label">Tempat</label>
                                                    <select class="form-control" data-toggle="select2" data-width="100%" name="tempat_id" id="tempat_id" required>
                                                        <option value="" selected>Pilih Tempat</option>
                                                        <?php
                                                        foreach ($tempat as $key => $item) {
                                                            $selected = "";
                                                            if ($data['tempat_id'] == $item['id']) {
                                                                $selected = "selected";
                                                            }
                                                            echo "<option value='{$item['id']}' $selected>{$item['nm_tempat']}</option>";
                                                        } ?>
                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Silahkan Pilih Tempat
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="barang_id" class="form-label">Barang</label>
                                                    <select class="form-control" data-toggle="select2" data-width="100%" name="barang_id" id="barang_id" required>
                                                        <option value="" selected>Pilih Barang</option>
                                                        <?php
                                                        foreach ($barang as $key => $item) {
                                                            $selected = "";
                                                            if ($data['barang_id'] == $item['id']) {
                                                                $selected = "selected";
                                                            }
                                                            echo "<option value='{$item['id']}' $selected>{$item['nm_barang']}</option>";
                                                        } ?>
                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Silahkan Pilih Barang
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="position-relative mb-3">
                                                    <label for="baik" class="form-label">Baik</label>
                                                    <input type="number" value=<?= $data['baik'] ?> class="form-control" id="baik" name="baik" required />
                                                    <div class="invalid-tooltip">
                                                        Tidak Boleh Kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="position-relative mb-3">
                                                    <label for="sedang" class="form-label">Sedang</label>
                                                    <input type="number" value=<?= $data['sedang'] ?> class="form-control" id="sedang" name="sedang" required />
                                                    <div class="invalid-tooltip">
                                                        Tidak Boleh Kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="position-relative mb-3">
                                                    <label for="rusak" class="form-label">Rusak</label>
                                                    <input type="number" value=<?= $data['rusak'] ?> class="form-control" id="rusak" name="rusak" required />
                                                    <div class="invalid-tooltip">
                                                        Tidak Boleh Kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="ket" class="form-label">Keterangan</label>
                                                    <input type="text" value="<?= $data['ket'] ?>" class=" form-control" id="ket" name="ket" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="position-relative mb-3">
                                                    <label for="gambar" class="form-label">Gambar</label>
                                                    <input type="file" name="gambar" id="gambar" data-plugins="dropify" data-max-file-size="1M" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="position-relative mb-3">
                                                    <label for="gambar" class="form-label">Gambar Lama</label>
                                                    <img src="../../assets/gambar/<?= $data['gambar'] ?>" width="100%" alt="" srcset="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-primary waves-effect" name="simpan">Simpan</button>
                                            <a href="./" class="btn btn-secondary waves-effect">Kembali</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include '../Layouts/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <?php include '../Layouts/rightbar.php' ?>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Script -->
    <?php include '../Layouts/script.php' ?>
    <!-- Plugin js-->
    <script src="../../assets/libs/parsleyjs/parsley.min.js"></script>
    <!-- Validation init js-->
    <script src="../../assets/js/pages/form-validation.init.js"></script>
    <!-- Select2 -->
    <script src="../../assets/libs/select2/js/select2.min.js"></script>
    <script src="../../assets/js/pages/form-advanced.init.js"></script>
    <!-- Plugins js -->
    <script src="../../assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="../../assets/libs/dropify/js/dropify.min.js"></script>

    <!-- Init js-->
    <script src="../../assets/js/pages/form-fileuploads.init.js"></script>

</body>

</html>