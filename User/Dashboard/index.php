<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../Layouts/header.php' ?>
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

    <!-- Start of banner section
        ============================================= -->
    <section id="banner" class="banner_section relative-position" data-background="../assets/img/saas-m/banner/bannerbg.png">
        <div class="banner_wrapper">
            <div class="container">
                <div class=" saas-modern-headline pera-content text-center">
                    <h3 class=" text-white"> Selamat Datang Di Website </h3>
                    <h1 class=" text-white"> Sistem Informasi </h1>
                    <h1 class=" display-5 text-white"> Inventori SMP YPK Kotaraja </h1>

                    <div class="banner_screen">
                        <div class="screen_img relative-position">
                            <div class="middle_screen">
                                <img src="../assets/img/lab.jpg" alt="" style="width: 766px; height:413px;">
                                <!-- <img src="../assets/img/saas-m/banner/bs1.png" alt=""> -->
                                <!-- ../assets/img/lab.jpg -->
                            </div>
                            <div class="side_screen1" data-aos="fade-up" data-aos-delay="300">
                                <img src="../assets/img/invent1.jpg" alt="" style="width: 209px; height:244px;">
                            </div>
                            <div class="side_screen2" data-aos="fade-up" data-aos-delay="300">
                                <img src="../assets/img/invent2.jpg" alt="" style="width: 354px; height:168px;">
                            </div>
                        </div>
                    </div>
                    <span class=" banner_shape1" data-parallax='{"y" : 150}'><img src="../assets/img/saas-m/banner/bsh1.png" alt=""></span>
                    <span class="banner_shape2" data-parallax='{"y" : 80}'><img src="../assets/img/saas-m/banner/bsh2.png" alt=""></span>
                    <span class="banner_shape3" data-parallax='{"y" : 80}'><img src="../assets/img/saas-m/banner/bsh3.png" alt=""></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End of banner section
        ============================================= -->

    <!-- Start of featured service section
        ============================================= -->
    <section id="featured_service" class="featured_service_section relative-position">
        <div class="container">
            <div class="section_title text-center">
                <div class="section_title_text saas-modern-headline pera-content">
                    <h2>Inventori Terakhir</h2>
                    <p>Daftar inventori yang terakhir diisi</p>
                </div>
            </div>
            <!-- /section-title -->
            <div id="featured_scroll" class="featured_content clearfix">
                <ul>
                    <li>
                        <div class="featured_icon_text text-center relative-position">
                            <div class="mem_img_text">
                                <div class="mem_img_line relative-position">
                                    <div class="mem_pic relative-position mb-3">
                                        <img src="../../assets/gambar/1634340491.jpg" width="100%" class="rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="featured_text saas-modern-headline">
                                    <h3>Easy to edit</h3>
                                    <p>Google Ad campaigns are an effective target receptive audience they get you.</p>
                                </div>
                                <div class="feature_btn">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of featured service section
        ============================================= -->

    <!-- Start of footer
        ============================================= -->
    <?php include '../Layouts/footer.php' ?>
    <!-- End of footer
        ============================================= -->

    <!-- JS library -->
    <?php include '../Layouts/script.php' ?>
</body>

</html>