<!DOCTYPE html>
<html lang="en">
<?php
$halaman = 'Dashboard'
?>

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <?php include '../../Admin/Layouts/header.php' ?>
</head>

<!-- body start -->

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
    <script src="../../assets/libs/apexchart/apexcharts.js"></script>
    <script src="../../assets/libs/apexchart/chart_init.js"></script>

    <script src="../Layouts/myscript.js"></script>


</body>

</html>