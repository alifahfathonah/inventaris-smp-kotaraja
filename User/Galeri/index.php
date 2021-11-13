<!DOCTYPE html>
<html lang="en">

<?php
include '../../Admin/TempatDet/functions.php';
$row = read();
?>

<head>
    <meta charset="UTF-8">
    <title>Galeri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../Layouts/header.php' ?>
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon-2.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <!-- Tambahan -->
    <link href="../../assets/libs/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" />
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
                <h1 class=" text-center">Galeri</h1>
                <div class="row">
                    <?php foreach ($row as $key => $data) {
                        if ($data['gambar'] !== 'kosong.png') { ?>

                            <div class="col-lg-3 col-md-6" class="side_screen2" data-aos="fade-right" data-aos-delay="300">
                                <div class="sa-team-inner-inner-box">
                                    <div class="str-team-img-text position-relative">
                                        <div class="str-team-img">
                                            <a href="../../assets/gambar/<?= $data['gambar'] ?>" data-lightbox="tempat_detail" data-title="<?= $data['nm_tempat'] ?>">
                                                <img src="../../assets/gambar/<?= $data['gambar'] ?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="text-center str-headline pera-content mt-2">
                                            <h4><?= $data['nm_tempat'] ?></h4>
                                            <span><?= $data['nm_barang'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
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
    <script src="../../assets//libs/lightbox/js/lightbox.js"></script>

    <script>
        $('#header_main').attr("style", `background-color: #13c1ec;
                padding-top: 0px; 
                padding-bottom: 0px;
                `)
    </script>
</body>

</html>