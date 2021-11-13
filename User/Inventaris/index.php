<!DOCTYPE html>
<html lang="en">

<?php
include '../../Admin/TempatDet/functions.php';
$row = read();
?>

<head>
    <meta charset="UTF-8">
    <title>Inventaris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../Layouts/header.php' ?>
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
        <div class="container">
            <div class="sa-team-=inner-contenb">
                <h1 class=" text-center">Daftar Inventaris</h1>
                <div class="row">
                    <?php foreach ($row as $key => $data) { ?>
                        <div class="col-lg-3 col-md-6" class="side_screen2" data-aos="fade-up" data-aos-delay="300">
                            <div class="sa-team-inner-inner-box">
                                <div class="str-team-img-text position-relative">
                                    <div class="str-team-img">
                                        <img src="../../assets/gambar/<?= $data['gambar'] ?>" alt="" />
                                    </div>
                                    <div class="str-team-text text-center str-headline pera-content">
                                        <h4><?= $data['nm_tempat'] ?></h4>
                                        <span><?= $data['nm_barang'] ?></span>
                                        <table class="text-white text-right m-auto">
                                            <tbody>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>:</td>
                                                    <td><?= $data['jmlh'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Baik</td>
                                                    <td>:</td>
                                                    <td><?= $data['baik'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sedang</td>
                                                    <td>:</td>
                                                    <td><?= $data['sedang'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Rusak</td>
                                                    <td>:</td>
                                                    <td> <?= $data['rusak'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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

    <script>
        $('#header_main').attr("style", `background-color: #13c1ec;
                padding-top: 0px; 
                padding-bottom: 0px;
                `)
    </script>
</body>

</html>