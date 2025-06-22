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
    <div class="container-fluid blog pb-5">
      <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
          <h4 class="text-uppercase text-primary">Galeri</h4>
          <h1 class="display-3 text-capitalize mb-3">Armada kami</h1>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- LOOP MULAI -->
            <?php foreach ($galeri as $item): ?>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card shadow border-0 h-100">
                        <img src="<?= base_url('uploads/' . $item['img']) ?>" class="card-img-top" alt="<?= esc($item['title']) ?>" style="object-fit: cover; height: 250px;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= esc($item['title']) ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- LOOP SELESAI -->
        </div>
      </div>
    </div>

<!-- ======= Contact Section ======= -->
           <?= view('layout/footer') ?> 

            <!-- End Contact Section -->
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