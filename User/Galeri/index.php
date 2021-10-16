<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../Layouts/header.php' ?>
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon-2.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
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
                <h1 class=" text-center mb-3">Galeri</h1>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="sa-team-inner-inner-box">
                            <div class="str-team-img-text position-relative">
                                <div class="str-team-img">
                                    <img src="../assets/img/startup/team/tm1.jpg" alt="" />
                                </div>
                                <div class="str-team-text text-center str-headline pera-content">
                                    <h4>Andrea Luies</h4>
                                    <span>Head in Design</span>
                                    <p>
                                        As a app web crawler to expertiy, I help to do organi
                                        iozat top of creature.
                                    </p>
                                    <div class="str-social-team">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="saasio-pagination text-center ul-li">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a class="active" href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </div>
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
                padding-top: 20px; 
                padding-bottom: 20px;
                `)
    </script>
</body>

</html>