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
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> -->
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

    <!-- Navbar Start -->
<?= view('layout/header') ?> 


      <!-- Carousel Start -->
  
 <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($sliders as $index => $slider) : ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <img loading="lazy" src="<?= base_url('uploads/' . $slider['gambar']) ?>" 
             class="d-block w-100 img-fluid" 
             alt="<?= esc($slider['judul']) ?>"
             style="height: 500px; object-fit: cover;">
        <div class="custom-caption text-end text-white position-absolute top-50 end-0 translate-middle-y pe-5">
          <h1 class="display-1 text-capitalize mb-4 fadeInRight animated" style="animation-delay: 1.3s">Selamat Datang</h1>
          <h4 class="text-uppercase fw-bold mb-4 fadeInRight animated" style="animation-delay: 1s; letter-spacing: 3px">Bergabung Dengan Kami Dengan Klik Tombol Dibawah</h4>
          <div class="fadeInRight animated" style="animation-delay: 1.7s">
            <a class="btn btn-primary rounded-pill py-3 px-5 me-2" href="#">Contact Us</a>
            <a class="btn btn-secondary rounded-pill py-3 px-5 ms-2" href="#">Join With Us</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Sebelumnya</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Berikutnya</span>
  </button>
</div>



    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex align-items-center">
            <div class="input-group w-75 mx-auto d-flex">
              <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1" />
              <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- About Start -->
    <div id="tentangkami" class="container-fluid about overflow-hidden py-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="about-img rounded h-100">
              <img loading="lazy" src="<?= base_url(relativePath: 'asset/img/pt1.jpg') ?>" class="img-fluid rounded h-100 w-100" style="object-fit: cover" alt="" />
              <div class="about-exp"><span>Berpengalaman selama 10 thn</span></div>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
            <div class="about-item">
              <h4 class="text-primary text-uppercase">Tentang kami</h4>
              <h1 class="display-3 mb-3">PT SUKAMAJU</h1>
              <p class="mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sequi natus reprehenderit ullam recusandae voluptates, minima rerum vel, exercitationem eos eveniet? Quaerat officiis modi quibusdam quae, sequi eius! Nostrum, expedita!
              </p>
              <div class="bg-light rounded p-4 mb-4">
                <div class="row">
                  <div class="col-12">
                    <div class="d-flex">
                      <div class="pe-4">
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"  style="width: 80px; height: 80px">
                          <img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="90"></div>
                      </div>
                      <div class="">
                        <a href="#" class="h4 d-inline-block mb-3">Paket Tersebar </a>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sequi natus reprehenderit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-light rounded p-4 mb-4">
                <div class="row">
                  <div class="col-12">
                    <div class="d-flex">
                      <div class="pe-4">
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px">
                          <img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="90"></div>
                      </div>
                      <div class="">
                        <a href="#" class="h4 d-inline-block mb-3">Paket Terbesar</a>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sequi natus reprehenderit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- feature Start -->
    <div id="produk" class="container-fluid feature bg-light py-5">
      <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
          <h4 class="text-uppercase text-primary">Produk Kami</h4>
          <h1 class="display-3 text-capitalize mb-3">Si Pengirim cepat </h1>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="feature-item p-4">
              <div class="feature-icon mb-3"><img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="100"></></div>
              <a href="#" class="h4 mb-3">armada banyak</a>
              <p class="mb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum obcaecati nihil ipsam quas, fuga voluptatum repellat velit nemo. Aliquam perspiciatis inventore, ullam earum esse nihil cupiditate dolores ut harum.
            </p>
              <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
            <div class="feature-item p-4">
              <div class="feature-icon mb-3"><img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="100"></div>
               <a href="#" class="h4 mb-3">armada banyak</a>
              <p class="mb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum obcaecati nihil ipsam quas, fuga voluptatum repellat velit nemo. Aliquam perspiciatis inventore, ullam earum esse nihil cupiditate dolores ut harum.
            </p>
              <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="feature-item p-4">
                <div class="feature-icon mb-3"><img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="100"></div>
              <a href="#" class="h4 mb-3">armada banyak</a>
              <p class="mb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum obcaecati nihil ipsam quas, fuga voluptatum repellat velit nemo. Aliquam perspiciatis inventore, ullam earum esse nihil cupiditate dolores ut harum.
            </p>
            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
            <div class="feature-item p-4">
                <div class="feature-icon mb-3"><img loading="lazy" src="<?= base_url('asset/img/truk.png') ?>" alt="" width="100"></div>
              <a href="#" class="h4 mb-3">armada banyak</a>
              <p class="mb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab rerum obcaecati nihil ipsam quas, fuga voluptatum repellat velit nemo. Aliquam perspiciatis inventore, ullam earum esse nihil cupiditate dolores ut harum.
            </p>
            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- feature End -->
    
    <br>
    <!-- Blog Start -->
<div class="container-fluid blog pb-5">
  <div class="container pb-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
      <h4 class="text-uppercase text-primary">Berita</h4>
      <h1 class="display-3 text-capitalize mb-3">Pengumuman</h1>
    </div>
    <div class="row g-4 justify-content-center">
      
    <div id="artikelCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php if (!empty($artikel)) : ?>
      <?php $index = 0; foreach ($artikel as $a): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="blog-item">
                <div class="blog-img">
                  <img loading="lazy" src="<?= base_url('uploads/' . $a['filename']) ?>" class="img-fluid rounded-top w-100" alt="<?= esc($a['judul']) ?>" />
                  <div class="blog-date px-4 py-2">
                    <i class="fa fa-tag me-1"></i> <?= esc($a['kategori']) ?>
                  </div>
                </div>
                <div class="blog-content rounded-bottom p-4">
                  <a href="#" class="h4 d-inline-block mb-3"><?= esc($a['judul']) ?></a>
                  <p><?= esc(word_limiter($a['isi'], 20)) ?></p>
                  <a href="/berita" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $index++; endforeach; ?>
    <?php else: ?>
      <div class="carousel-item active">
        <p class="text-center">Belum ada artikel.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#artikelCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#artikelCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


    </div>
  </div>
</div>
<!-- Blog End -->

    <!-- Galeri Start -->
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
                        <img loading="lazy" src="<?= base_url('uploads/' . $item['img']) ?>" class="card-img-top" alt="<?= esc($item['title']) ?>" style="object-fit: cover; height: 250px;">
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
    <!-- Galeri End -->




            <!-- ======= Contact Section ======= -->
           <?= view('layout/footer') ?> 

            <!-- End Contact Section -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset/lib/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/easing/easing.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?= base_url('asset/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('asset/js/main.js')?>"></script>
  </body>
</html>

