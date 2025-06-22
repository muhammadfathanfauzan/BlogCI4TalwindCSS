<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kelola Slider - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

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
  <!-- Main Content -->
  <main class="flex-1 p-10">
    <h2 class="text-3xl font-bold mb-6">Kelola Slider</h2>

    <!-- Form Upload Gambar -->
    <div class="bg-white p-6 rounded shadow mb-8">
      <form action="/admin/slider/simpan" method="post" enctype="multipart/form-data">
        <div class="mb-4">
          <label class="block font-semibold mb-1">Judul Slider</label>
          <input type="text" name="judul" required class="w-full border rounded px-3 py-2" />
        </div>

        <div class="mb-4">
          <label class="block font-semibold mb-1">Gambar</label>
          <input type="file" name="gambar" accept="image/*" required class="w-full border rounded px-3 py-2" />
        </div>

        <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-6 py-2 rounded">
          Upload
        </button>
      </form>
    </div>

    <!-- Preview Gambar -->
    <div class="bg-white p-6 rounded shadow">
      <h3 class="text-xl font-semibold mb-4">Gambar yang Sudah Diunggah</h3>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <?php if (!empty($sliders)): ?>
          <?php foreach ($sliders as $slider): ?>
            <div class="border p-2 rounded flex flex-col">
              <img src="<?= base_url('uploads/' . $slider['gambar']) ?>" alt="<?= esc($slider['judul']) ?>" class="w-full h-32 object-cover rounded mb-2" />
              <p class="text-sm font-medium mb-3"><?= esc($slider['judul']) ?></p>
              <div class="mt-auto flex justify-between gap-2">
                <a href="/admin/slider/edit/<?= $slider['id'] ?>" 
                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm flex items-center gap-1">
                   <i data-lucide="edit-2" class="w-4 h-4"></i> Edit
                </a>

                <form action="/admin/slider/delete/<?= $slider['id'] ?>" method="post" onsubmit="return confirm('Yakin mau hapus slider ini?');" class="inline">
                  <?= csrf_field() ?>
                  <button type="submit" 
                          class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm flex items-center gap-1">
                    <i data-lucide="trash" class="w-4 h-4"></i> Delete
                  </button>
                </form>
              </div>
            </div>
          <?php endforeach ?>
        <?php else: ?>
          <p class="text-gray-500">Belum ada gambar.</p>
        <?php endif ?>
      </div>
    </div>
  </main>
</div>

<script>
  lucide.createIcons();
</script>
</body>
</html>
