<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PT kargoo </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

      <!-- Libraries Stylesheet -->
    <link href="<?= base_url('asset/lib/animate/animate.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('asset/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url ('asset/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url ('asset/css/style.css') ?>" rel="stylesheet" />
    <!-- Customized Bulma Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
  </head>

  <body>
     <?= view('layout/headera') ?> 
<br>
<br>
<!-- Blog Start -->
<div class="container-fluid blog pb-5">
  <div class="container pb-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
      <h4 class="text-uppercase text-primary">Berita</h4>
      <h1 class="display-3 text-capitalize mb-3">Pengumuman</h1>
    </div>
    <div class="row g-4 justify-content-center">
      
      <?php if (!empty($artikel)) : ?>
        <?php foreach ($artikel as $a): ?>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item">
              <div class="blog-img">
                <img src="<?= base_url('uploads/' . $a['filename']) ?>" class="img-fluid rounded-top w-100" alt="<?= esc($a['judul']) ?>" />
                <div class="blog-date px-4 py-2">
                  <i class="fa fa-tag me-1"></i> <?= esc($a['kategori']) ?>
                </div>
              </div>
              <div class="blog-content rounded-bottom p-4">
                <a href="#" class="h4 d-inline-block mb-3"><?= esc($a['judul']) ?></a>
                <p><?= esc(word_limiter($a['isi'], 20)) ?></p>
                <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">Belum ada artikel.</p>
      <?php endif; ?>

    </div>
  </div>
</div>


      <!-- ======= Contact Section ======= -->
            <section id="footer" class="contact bg-dark text-white py-5">
              <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                  
                  <!-- Kolom Informasi Kontak -->
                  <div class="col-lg-6">
                    <h5 class="text-uppercase mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                      <li>Alamat: Jl. Contoh No.123, Jakarta</li>
                      <li><strong>Telepon:</strong> (021) 12345678</li>
                      <li><strong>Email:</strong> sukamaju@gmail.com</li>
                    </ul>
                    <div class="mt-3">
                      <a href="#" class="btn btn-outline-light btn-sm me-2">Facebook</a>
                      <a href="#" class="btn btn-outline-light btn-sm me-2">Instagram</a>
                      <a href="#" class="btn btn-outline-light btn-sm">YouTube</a>
                    </div>
                  </div>

                  <!-- Kolom Maps -->
                  <div class="col-lg-6">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3289605588607!2d106.87298991080648!3d-6.351439662111972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ecf03842e251%3A0xff4e56233d666ae4!2sSekolah%20Menengah%20Kejuruan%20(SMK)%20Insan%20Teknologi%20Jakarta!5e0!3m2!1sid!2sid!4v1732111913740!5m2!1sid!2sid"
                      width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                  </div>

                </div>

                <!-- Batas Bawah -->
                <hr class="border-light mt-5">
                <p class="text-center mb-0 small">© <?= date('Y') ?> Sukamaju Jakarta. All rights reserved.</p>
              </div>
            </section>

            <!-- End Contact Section -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('aseet/lib/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/easing/easing.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('asset/js/main.js')?>"></script>
  </body>
</html>