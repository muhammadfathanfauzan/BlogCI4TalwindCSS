<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 px-lg-5 py-3">
  <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="<?= base_url('asset/img/logo.png')?>" alt="Logo PT Kargoo" width="40" class="me-2">
    <h1 class="text-primary fs-4 mb-0">PT SUKAMAJU</h1>
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/berita">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery">Galeri</a>
      </li>
       <a class="nav-link" href="#kontak">Kontak</a>
      </li>
    </ul>

    <div class="d-flex align-items-center ms-3">
  <button class="btn btn-primary btn-md-square rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#searchModal">
    <i class="fas fa-search"></i>
  </button>
  <a href="/login" class="btn btn-primary rounded-pill px-4">Masuk</a>
</div>
</nav>