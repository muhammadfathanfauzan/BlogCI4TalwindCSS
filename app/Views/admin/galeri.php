<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <title>CRUD Galeri Admin (Single Page)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex">
  <!-- Sidebar -->
  <!-- Sidebar -->
  <aside class="w-64 bg-purple-800 text-white p-5 flex flex-col min-h-screen">
    <h1 class="flex items-center gap-3 mb-10 justify-center text-2xl font-bold">
      <img src="<?= base_url('asset/img/logo.png')?>" alt="Logo Perusahaan" class="w-8 h-8 object-contain" />
      <span>PT SUKAMAJU</span>
    </h1>

    <nav class="space-y-2">
      <a href="/admin/dashboard" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
        <span>Dashboard</span>
      </a>
      <a href="/admin/artikel" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="pen-square" class="w-5 h-5"></i>
        <span>Tulis Artikel</span>
      </a>
      <a href="/admin/daftarartikel" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="file-text" class="w-5 h-5"></i>
        <span>Daftar Artikel</span>
      </a>
      <a href="/admin/galeri" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="image" class="w-5 h-5"></i>
        <span>Galeri</span>
      </a>
      <a href="/admin/slider" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="sliders" class="w-5 h-5"></i>
        <span>Slider</span>
      </a>
      <a href="/admin/tambahadmin" class="flex items-center gap-2 hover:bg-purple-700 p-2 rounded transition">
        <i data-lucide="user-plus" class="w-5 h-5"></i>
        <span>Tambah Admin</span>
      </a>
    </nav>

    <a href="/logout" class="mt-auto flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 py-2 rounded transition">
      <i data-lucide="log-out" class="w-5 h-5"></i>
      <span>Keluar</span>
    </a>
  </aside>

  <main class="flex-1 p-8 overflow-auto">
        <?= view('admin/layout/header')?>

    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold mb-6">Galeri Admin</h1>

      <!-- Alert -->
      <?php if(session()->getFlashdata('success')): ?>
          <div class="alert alert-success mb-4"><?= session()->getFlashdata('success') ?></div>
      <?php endif; ?>
      <?php if(session()->getFlashdata('error')): ?>
          <div class="alert alert-danger mb-4"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>
      <?php if(session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger mb-4">
              <ul class="list-disc pl-5">
                  <?php foreach(session()->getFlashdata('errors') as $err): ?>
                      <li><?= esc($err) ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
      <?php endif; ?>

      <!-- Table galeri -->
      <table class="table table-bordered table-striped align-middle w-full mb-6">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th style="width: 150px;">Aksi</th>
              </tr>
          </thead>
          <tbody>
          <?php if(!empty($galeri)): ?>
              <?php $no=1; foreach($galeri as $item): ?>
                  <tr>
                      <td><?= $no++ ?></td>
                                            <td><img src="<?= base_url('uploads/'.$item['img']) ?>" width="120" /></td>
                      <td><?= esc($item['title']) ?></td>
                      <td><?= esc($item['desc']) ?></td>

                      <td>
                          <a href="<?= base_url('admin/galeri?edit='.$item['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                          <a href="<?= base_url('admin/galeri/hapus/'.$item['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                      </td>
                  </tr>
              <?php endforeach; ?>
          <?php else: ?>
              <tr><td colspan="5" class="text-center">Data galeri kosong</td></tr>
          <?php endif; ?>
          </tbody>
      </table>

      <hr class="my-6" />

      <!-- Form tambah / edit -->
      <?php if ($edit_item): ?>
          <h2 class="text-xl font-semibold mb-4">Edit Galeri</h2>
          <form action="<?= base_url('admin/galeri/update/'.$edit_item['id']) ?>" method="post" enctype="multipart/form-data" class="space-y-4">
              <?= csrf_field() ?>
              <div>
                  <label class="block mb-1 font-medium">Judul</label>
                  <input type="text" name="title" class="form-control" value="<?= old('title', $edit_item['title']) ?>" required />
              </div>
              <div>
                  <label class="block mb-1 font-medium">Deskripsi</label>
                  <textarea name="desc" class="form-control" required><?= old('desc', $edit_item['desc']) ?></textarea>
              </div>
              <div>
                  <label class="block mb-1 font-medium">Gambar saat ini</label>
                  <img src="<?= base_url('uploads/'.$edit_item['img']) ?>" width="200" class="mb-3" />
                  <label class="block mb-1 font-medium">Ganti Gambar (kosongkan jika tidak mau ganti)</label>
                  <input type="file" name="img" class="form-control" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('admin/galeri') ?>" class="btn btn-secondary">Batal</a>
              </div>
          </form>
      <?php else: ?>
          <h2 class="text-xl font-semibold mb-4">Tambah Galeri</h2>
          <form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data" class="space-y-4">
              <?= csrf_field() ?>
              <div>
                  <label class="block mb-1 font-medium">Judul</label>
                  <input type="text" name="title" class="form-control" value="<?= old('title') ?>" required />
              </div>
              <div>
                  <label class="block mb-1 font-medium">Deskripsi</label>
                  <textarea name="desc" class="form-control" required><?= old('desc') ?></textarea>
              </div>
              <div>
                  <label class="block mb-1 font-medium">Gambar</label>
                  <input type="file" name="img" class="form-control" required />
              </div>
              <button type="submit" class="btn btn-success">Tambah</button>
          </form>
      <?php endif; ?>
    </div>
  </main>
<script>
  lucide.createIcons();
</script>
</body>
</html>
