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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php'); ?>

  <section class="single-post-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 post-content" data-aos="fade-up">
          <!-- ======= Single Post Content ======= -->

          <div class="single-post">
            <figure class="my-4">
              <img src="dokumen/<?php echo $artikelData['file']; ?>" alt="" class="img-fluid">
            </figure>
            <div class="post-meta"><span class="date"></span><?php echo $artikelData['nama']; ?><span class="mx-1">&bullet;</span><span><?php echo $artikelData['tanggal']; ?></span></div>
            <h2 class="mb-5"><?= $artikelData['judul'] ?></h2>
            <p><?php echo $artikelData['subtitle'] ?></p>
            <hr>
            <p><?php echo $artikelData['content'] ?></p>
          </div><!-- End Single Post Content -->
        </div>
      </div>
    </div>
  </section>

  <section class="comments-section">
    <div class="container">
      <div id="commentsList">
        <?php while ($comment = mysqli_fetch_assoc($queryComments)) { ?>
          <div class="comments">
            <div class="container">
              <p><strong><?= $comment['username']; ?></strong>: <?= $comment['comment']; ?><br><?= $comment['date']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div> 
      <hr>
      <h3>Komentar</h3>
      <form id="commentForm" method="POST" action="submit_comment.php">
        <input type="hidden" name="idartikel" value="<?= $idartikel; ?>">
        <div class="form-group">
          <textarea name="comment" class="form-control" rows="3" placeholder="Tulis komentar Anda..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>

    </div>
  </section>

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#commentForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'submit_comment.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            alert(response);
            location.reload(); // Reload halaman setelah komentar ditambahkan
          },
          error: function(xhr, status, error) {
            console.error('AJAX error:', status, error);
          }
        });
      });
    });
  </script>
</body>

</html>
