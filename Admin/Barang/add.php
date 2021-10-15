<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
if (isset($_POST["simpan"])) {
    create($_POST);
}


$halaman = 'barang'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah <?= $halaman ?></title>
    <!-- third party css -->
    <link href="../../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
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
                                    <form method="POST" class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative mb-3">
                                                    <label for="nm_barang" class="form-label">Nama Barang</label>
                                                    <input type="text" class="form-control" id="nm_barang" name="nm_barang" required />
                                                    <div class="invalid-tooltip">
                                                        Tidak Boleh Kosong
                                                    </div>
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
</body>

</html>