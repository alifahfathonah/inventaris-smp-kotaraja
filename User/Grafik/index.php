<!DOCTYPE html>
<html lang="en">

<?php
include 'functions.php';
$tempat = readTempat();
?>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../Layouts/header.php' ?>
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon-2.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <!-- Tambahan -->
</head>

<body class="saas-modern">
    <!-- preloader - start -->
    <div id="preloader" class="saas-modern-preloader"></div>
    <div class="up">
        <a href="#" id="scrollup" class="saas-modern-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Start of header section
        ============================================= -->
    <?php include '../Layouts/topbar.php' ?>
    <!-- End of header section
        ============================================= -->

    <!-- Start of Galeri section
        ============================================= -->
    <section id="sa-team-inner" class="sa-team-inner-section inner-page-padding">
        <div class="container mt-5">
            <div class="sa-team-=inner-contenb">
                <div class="row">
                    <div class="col-12">
                        <h3 class=" text-center">Grafik Barang</h3>
                        <div id="chartBarang"></div>
                    </div>
                    <!-- <div class="col-12" id="pieDinamis">
                        <h3 class=" text-center">Grafik Tempat</h3>
                        <div id="pieTempat"></div>
                    </div> -->

                </div>
                <!-- <div class="saasio-pagination text-center ul-li">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a class="active" href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End of Galeri section
        ============================================= -->

    <!-- Start of footer
        ============================================= -->
    <?php include '../Layouts/footer.php' ?>
    <!-- End of footer
        ============================================= -->

    <!-- JS library -->
    <?php include '../Layouts/script.php' ?>

    <script src="../../assets/libs/apexchart/apexcharts.js"></script>
    <script src="../../assets/libs/apexchart/chart_init.js"></script>

    <script>
        $('#header_main').attr("style", `background-color: #13c1ec;
                padding-top: 20px; 
                padding-bottom: 20px;
                `)
    </script>
</body>

</html>