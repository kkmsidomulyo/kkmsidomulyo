<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PKK Desa Sidomulyo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/icon.png" alt="Logo" style="width: 50px; height: auto; margin-right: 10px;">
            <h1>PKK Desa Sidomulyo</h1>
        </a>

        <nav id="navbar" class="navbar align-items-center">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">Profil</a>
                    <ul class="dropdown-menu">
                    <li><a href="visi_misi.php"><i class="bi bi-chevron-right"></i> Visi & Misi</a></li>
                    </ul>
                </li>
                <li><a href="artikel1.php">Artikel</a></li>
                <li class="dropdown">
                    <a href="#">Galeri</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="galeri_foto.php">Foto</a></li>
                        <li><a class="dropdown-item" href="galeri_vidio.php">Vidio</a></li>
                    </ul>
                </li>
                <li><a href="https://wa.me/6282232325053">Kontak</a></li>
            </ul>
        </nav><!-- .navbar -->

      <div class="position-relative">

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts">
          <div class="swiper-wrapper">
            <!-- Only one slide with post1.png -->
            <div class="swiper-slide">
              <a class="img-bg d-flex align-items-center justify-content-start" style="background-image: url('assets/img/post1.jpg');">
                <div class="img-bg-inner">
                  <div class="text-left">
                    <h2>Artikel</h2>
                    <p>Memuat Informasi terbaru Desa Sidomulyo</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
          <!-- Navigation buttons (next/prev) -->
          <div class="custom-swiper-button-next">
            <span class="bi-chevron-right"></span>
          </div>
          <div class="custom-swiper-button-prev">
            <span class="bi-chevron-left"></span>
          </div>

          <!-- Pagination (optional, can be removed if you don't need it) -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM artikel, user WHERE artikel.iduser = user.iduser LIMIT 9");
    $artikel = [];
    while ($dt_artikel = mysqli_fetch_assoc($query)) {
        $artikel[] = $dt_artikel;
    }
    $artikel_tampil = array_slice($artikel, 0, 9);
?>
<section id="posts" class="posts">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5">
      <?php foreach ($artikel_tampil as $data) { ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
              <a href="login.php" class="text-decoration-none text-dark">
                <h5 class="card-title mb-3 fw-bold"><?php echo $data['judul']; ?></h5>
                <p class="card-text text-muted mb-3"><?php echo $data['subtitle']; ?></p>
              </a>
            </div>
            <div class="card-footer bg-light py-2 d-flex justify-content-between align-items-center">
              <p class="card-text mb-0">
                Posted by <a href="#" class="text-primary text-decoration-none"><?php echo $data['username']; ?></a>
                on <?php echo $data['tanggal']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </section> <!-- End Post Grid Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<div class="footer-content">
    <div class="container">
        <div class="row g-5">
            <!-- Left Section with Text and Image -->
            <div class="col-lg-4 text-center text-lg-start">
                <h3 class="footer-heading">PKK Desa Sidomulyo</h3>
                <img src="assets/img/icon.png" alt="Logo PKK" class="img-fluid mt-2" style="max-width: 100px;">
            </div>

            <!-- Middle Section with Profil -->
            <div class="col-6 col-lg-2">
                <h3 class="footer-heading">Profil</h3>
                <ul class="footer-links list-unstyled">
                    <li><a href="visi_misi.php"><i class="bi bi-chevron-right"></i> Visi & Misi</a></li>
                </ul>
            </div>

            <!-- Middle Section with Quick Links -->
            <div class="col-6 col-lg-2">
                <h3 class="footer-heading">Quick Link</h3>
                <ul class="footer-links list-unstyled">
                    <li><a href="galeri_foto.php"><i class="bi bi-chevron-right"></i> Galeri</a></li>
                    <li><a href="artikel1.php"><i class="bi bi-chevron-right"></i> Artikel</a></li>
                </ul>
            </div>

            <!-- Right Section with Contact Info -->
            <div class="col-6 col-lg-4">
                <h3 class="footer-heading">Hubungi Kami</h3>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt"></i>Sidomulyo Kec. Jabung Kabupaten Malang,Jawa Timur</li>
                    <li><i class="bi bi-envelope"></i> </li>
                    <li><i class="bi bi-telephone"></i>+62 822-3232-5053</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer-legal" style="padding: 8px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-3 mb-md-0">
                <div class="copyright" style="padding: 5px;">
                    © Copyright <strong><span>PKK Desa Sidomulyo</span></strong>. All Rights Reserved
                </div>
                <div class="credits" style="padding: 4px;">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>