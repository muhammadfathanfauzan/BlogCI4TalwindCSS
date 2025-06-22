<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Admin Blog</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-purple-800 text-white p-5 flex flex-col min-h-screen">
    <h1 class="flex items-center gap-3 mb-10 justify-center text-2xl font-bold">
      <img src="<?= base_url('asset/img/logo.png') ?>" alt="Logo Perusahaan" class="w-8 h-8 object-contain" />
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

  <!-- Main Content -->
  <main class="flex-1 p-10 bg-white">
    <?= view('admin/layout/header') ?>

    <h2 class="text-3xl font-bold mb-6">Tulis Artikel</h2>

    <!-- Form Upload Artikel -->
    <form action="<?= site_url('admin/artikel/simpan') ?>" method="post" enctype="multipart/form-data" class="space-y-5">

      <div>
        <label for="judul" class="block font-semibold mb-1">Judul Artikel</label>
        <input type="text" name="judul" id="judul" required
               class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-600" />
      </div>

      <div>
        <label for="kategori" class="block font-semibold mb-1">Kategori</label>
        <select name="kategori" id="kategori" required
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-600">
          <option value="">-- Pilih Kategori --</option>
          <option value="pengiriman">Pengiriman</option>
          <option value="umum">Umum</option>
          <option value="jenispaket">Jenis Paket</option>
        </select>
      </div>

      <div>
        <label for="isi" class="block font-semibold mb-1">Isi Artikel</label>
        <textarea name="isi" id="isi" rows="8" required
                  class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
      </div>

      <div>
        <label for="gambar" class="block font-semibold mb-1">Upload Gambar</label>
        <input type="file" name="gambar" id="gambar" accept="image/*" required
               class="w-full border border-gray-300 rounded px-4 py-2 file:bg-purple-800 file:text-white file:px-4 file:py-2 file:rounded file:border-none focus:outline-none focus:ring-2 focus:ring-purple-600" />
      </div>

      <button type="submit"
              class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded">
        Simpan Artikel
      </button>
    </form>
  </main>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>
</body>
</html>
