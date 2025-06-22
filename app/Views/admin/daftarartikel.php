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
  <main class="flex-1 p-10 bg-white">
        <?= view('admin/layout/header')?>

    <h2 class="text-3xl font-bold mb-6">Daftar Artikel</h2>

    

    <!-- Tabel Daftar Artikel -->
    <table class="w-full border border-gray-300 shadow rounded overflow-hidden">
      <thead>
        <tr class="bg-purple-800 text-white">
          <th class="py-3 px-4 text-center">No</th>
          <th class="py-3 px-4 text-center">Sampul</th>
          <th class="py-3 px-4 text-left">Judul</th>
          <th class="py-3 px-4 text-center">Kategori</th>
          <th class="py-3 px-4 text-center">Tanggal</th>
          <th class="py-3 px-4 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($artikel as $row): ?>
          <tr class="hover:bg-gray-100">
            <td class="border-t px-4 py-3 text-center"><?= $no++ ?></td>
            <td class="border-t px-4 py-3 text-center">
              <?php if (!empty($row['filename'])): ?>
                <img src="<?= base_url('uploads/' . $row['filename']) ?>" alt="Sampul <?= esc($row['judul']) ?>" class="mx-auto" width="60" />
              <?php else: ?>
                <span class="text-gray-400 italic">No Image</span>
              <?php endif; ?>
            </td>
            <td class="border-t px-4 py-3"><?= esc($row['judul']) ?></td>
            <td class="border-t px-4 py-3 text-center"><?= esc($row['kategori']) ?></td>
            <td class="border-t px-4 py-3 text-center"><?= date('d M Y', strtotime($row['created_at'])) ?></td>
            <td class="border-t px-4 py-3 text-center space-x-2">
          <a href="<?= base_url('admin/daftarartikel/edit/' . $row['id']) ?>">Edit</a>
<a href="<?= base_url('admin/daftarartikel/delete/' . $row['id']) ?>" onclick="return confirm('Yakin mau hapus artikel ini?')">Hapus</a>
    
          </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </main>
</div>

<script>
  lucide.createIcons();
</script>
</body>
</html>
