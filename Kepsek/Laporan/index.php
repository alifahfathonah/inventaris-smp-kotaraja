<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
$tempat = readTempat();
$barang = readBarang();
$halaman = 'Laporan'
?>

<head>
    <meta charset="utf-8" />
    <title>Laporan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <!-- third party css -->
    <link href="../../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <?php include '../../Admin/Layouts/header.php' ?>
</head>

<!-- body start -->

<body data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}'>
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
                                    <h3 class="text-center">Laporan Inventaris Barang</h3>
                                    <div class="row my-3">
                                        <div class="col-12 col-md-10">
                                            <select class="form-control" data-toggle="select2" data-width="100%" name="tempat_id" id="tempat_id">
                                                <option value="" selected>Pilih Tempat</option>
                                                <?php
                                                foreach ($tempat as $key => $item) {
                                                    echo "<option value='{$item['id']}'>{$item['nm_tempat']}</option>";
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light" id="cetak">Cetak</a>
                                        </div>
                                    </div>
                                    <div id="tampil"></div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div> <!-- content -->
        </div>

        <!-- Footer Start -->
        <?php include '../../Admin/Layouts/footer.php' ?>
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

    <!-- App js -->
    <?php include '../../Admin/Layouts/script.php' ?>

    <!-- third party js -->
    <script src="../../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="../../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="../../assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- third party js ends -->
    <!-- Select2 -->
    <script src="../../assets/libs/select2/js/select2.min.js"></script>
    <script src="../../assets/js/pages/form-advanced.init.js"></script>
    <!-- Datatables init -->
    <script>
        let tempat_id = '';
        let barang_id = '';

        function pilihLap(tempat_id = '', barang_id = '') {
            $.ajax({
                url: "data.php",
                type: 'GET',
                data: {
                    'tempat_id': tempat_id,
                    'barang_id': barang_id,
                },
                success: function(response) {
                    $('#tampil').html(response);
                }
            });
        }

        pilihLap();
        $('#tempat_id').on('change', function() {
            tempat_id = $(this).val()
            pilihLap(tempat_id, barang_id);
        })
        $('#barang_id').on('change', function() {
            barang_id = $(this).val()
            pilihLap(tempat_id, barang_id);
        })
        $('#cetak').on('click', function() {
            window.open(`cetak.php?tempat_id=${tempat_id}&barang_id=${barang_id}`, "_blank");
        })
    </script>

</body>

</html>