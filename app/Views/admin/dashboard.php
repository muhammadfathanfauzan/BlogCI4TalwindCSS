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
  <main class="flex-1 p-6">
 
    <?= view('admin/layout/header')?>

    <!-- Stat Box -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <div class="bg-white p-5 rounded shadow">
        <p class="text-sm text-gray-500">Total Artikel</p>
        <h3 class="text-2xl font-bold"><?= $totalArtikel ?></h3>
      </div>
      <div class="bg-white p-5 rounded shadow">
        <p class="text-sm text-gray-500">Komentar</p>
        <h3 class="text-2xl font-bold">0</h3> <!-- Kalau mau, ini diisi dari CommentModel -->
      </div>
      <div class="bg-white p-5 rounded shadow">
        <p class="text-sm text-gray-500">Kategori</p>
        <h3 class="text-2xl font-bold"><?= $totalKategori ?></h3>
      </div>
    </div>

    <!-- Artikel Terbaru -->
    <div class="bg-white p-6 rounded shadow mb-6 overflow-x-auto">
      <h4 class="text-xl font-semibold mb-4">Artikel Terbaru</h4>
      <table class="w-full text-left border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-2 border-b border-gray-200">Judul</th>
            <th class="p-2 border-b border-gray-200">Kategori</th>
            <th class="p-2 border-b border-gray-200">Tanggal</th>
            <th class="p-2 border-b border-gray-200">Sampul</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($artikelTerbaru)): ?>
            <?php foreach ($artikelTerbaru as $artikel): ?>
              <tr>
                <td class="p-2 border-b border-gray-200"><?= esc($artikel['judul']) ?></td>
                <td class="p-2 border-b border-gray-200"><?= esc($artikel['kategori']) ?></td>
                <td class="p-2 border-b border-gray-200">
                  <?= isset($artikel['create_at']) ? date('d M Y', strtotime($artikel['create_at'])) : '-' ?>
                </td>
                <td class="p-2 border-b border-gray-200">
                  <?php if (!empty($artikel['filename'])): ?>
                    <img src="<?= base_url('uploads/' . esc($artikel['filename'])) ?>" alt="Sampul" class="w-20 h-auto rounded" />
                  <?php else: ?>
                    -
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr><td colspan="4" class="p-4 text-center text-gray-500">Tidak ada artikel terbaru.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Tombol Tulis Artikel -->
    <div class="text-right">
      <a href="/admin/artikel" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">+ Tulis Artikel Baru</a>
    </div>
  </main>
</div>


<script>
  lucide.createIcons();
</script>

</body>
</html>
