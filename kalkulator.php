<?php
include __DIR__  . DIRECTORY_SEPARATOR . 'Function/HasilAnalisis.php';
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        /* CSS untuk mengatur lebar kolom secara otomatis */
        .auto-width {
            transition: all 0.3s;
        }
    </style>
    <!-- =======================================================
    * Template Name: Impact
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<!-- Start Header -->
    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index_user.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.svg" alt="Logo FastPlanner">
            <h1>FastPlanner</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index" class="active">Beranda</a></li>
                <li><a href="schedule_user">Puasa</a></li>
                <li><a href="menu">Menu</a></li>
                <li><a href="Pembelian">Pembelian</i></a></li>
                <li><a href="profile_user">Profile</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
<!-- End Header -->
    
  <!-- Profile -->
  <section class="sectionprofile">
  <div class="container">
    <!-- Row dengan 2 kolom -->
    <div class="row justify-content-center">
        <!-- Kolom 1 -->
        <div class="col-sm-8" id="col1">
            <!-- Baris 1 dalam Kolom 1 -->
            <div class="row mb-3">
                <div class="col">
                    <div class="card rounded-5 px-4 pt-4 text-center bg-dark text-white">
                        <div class="card-body">
                            <form action="Function/analyzenutrient">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="text-white mb-3"><h3><b>Analisis nutrisi</b></h3></label>
                                    <textarea class="form-control rounded-4 bg-dark text-white" id="ingredients" name="ingredients" rows="3" placeholder="example: 100g tomato *Use English Only"></textarea>
                                </div>
                                <button type="submit" class="btn btn-lg btn-warning my-4">Analisis</button>
                                <?php
                                if($showNutritionalData == 1){
                                    echo '<a href="Function/ClearSessionNutrisi" class="btn btn-lg btn-success">New recipe</a>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Baris 1 dalam Kolom 1 -->

            <!-- Baris 2 dalam Kolom 1
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1C</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Akhir Baris 2 dalam Kolom 1 -->
        </div>
        <!-- Akhir Kolom 1
        <div class="col-md-4 " id="col2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some text for Card 2.</p>
                    <p class="card-text">Some text for Card 2.</p>
                    <p class="card-text">Some text for Card 2.</p>
                    <p class="card-text">Some text for Card 2.</p>
                </div>
            </div>
        </div> -->
        <!-- Kolom 2 -->
        <?php
            if ($showNutritionalData  == 1) {
                echo '<div class="col-md-4  id="col2">
                    <div class="card rounded-4 bg-dark text-white px-4 pt-4 justify-content-center tex-center">
                            <div class="card-body ">
                                <h2 class="card-title"><b>Informasi Nutrisi</b></h2>
                                <h4 class ="my-2">Dari bahan : '.$output.'</h4>
                                <div>
                                    <p class="card-text ms-3 my-2 mt-5"><b>Jumlah Kalori : '.number_format($totalCalories, 2, '.', '').' Kcal</b></p>
                                    <p class="card-text ms-3 my-1"><b>Jumlah Lemak : '.number_format($totalSaturatedFat, 2, '.', '').' g</b></p>
                                    <p class="card-text ms-5 my-1">Lemak Jenuh : '.number_format($totalFat, 2, '.', '').' g</p>
                                    <p class="card-text ms-3 my-2"><b>Jumlah Serat : '.number_format($totalFiber, 2, '.', '').' g</b></p>
                                    <p class="card-text ms-3 my-2"><b>Karbohidrat : '.number_format($totalCarbohydrates, 2, '.', '').' g</b></p>
                                    <p class="card-text ms-3 my-2"><b>Protein : '.number_format($totalProtein, 2, '.', '').' g</b></p>
                                    <p class="card-text ms-3 my-2 mb-5"><b>Vitamin A : '.number_format($totalVitaminA, 2, '.', '').' g</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
                # code...
            }
        ?>
        <!-- Akhir Kolom 2 -->
    </div>
    <!-- Akhir Row dengan 2 kolom -->
</div>

  </section>
      <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.svg" alt="Logo FastPlanner">
                <span>FastPlanner</span>
            </a>
            <p>FastPlanner memberikan Anda solusi kesempurnaan diet dalam genggaman Anda. Dengan banyak fitur luar biasa, Anda akan merasakan perbedaannya sejak hari pertama.</p>
            <div class="social-links d-flex mt-4">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br><br>
                <strong>Phone:</strong> +62-212-3102-0023<br>
                <strong>Email:</strong> fastplanner@gmail.com<br>
            </p>

            </div>
        
        </div>
        </div>

        <div class="container mt-4">
        <div class="copyright">
            &copy; 2023 <strong><span>- W COMPANY</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            All Rights Reserved powered by FastPlanner.com
        </div>
        </div>

    </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>