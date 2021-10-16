<!DOCTYPE html>
<html lang="en">
<?php
include 'functions.php';
$tempat = readTempat();
$halaman = 'Dashboard'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tempat</title>
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
                                    <h3 class="text-center">Grafik Barang</h3>
                                    <div id="chartBarang">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-center">Grafik Tempat</h3>
                                    <select class="form-control" data-toggle="select2" data-width="100%" name="tempat_id" id="tempat_id" required>
                                        <option value="" disabled selected>Pilih Tempat</option>
                                        <?php
                                        foreach ($tempat as $key => $item) {
                                            echo "<option value='{$item['id']}'>{$item['nm_tempat']}</option>";
                                        } ?>
                                    </select>
                                    <div id="chartTempat">
                                    </div>
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
    <script src="../../assets/libs/apexchart/apexcharts.js"></script>
    <script src="../../assets/libs/apexchart/chart_init.js"></script>
    <!-- Select2 -->
    <script src="../../assets/libs/select2/js/select2.min.js"></script>
    <script src="../../assets/js/pages/form-advanced.init.js"></script>



</body>

</html>