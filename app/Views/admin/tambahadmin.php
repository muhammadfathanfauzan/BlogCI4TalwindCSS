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
  <main class="flex-1 p-10">
        <?= view('admin/layout/header')?>

    <h2 class="text-2xl font-bold mb-6"><?= isset($edit) ? 'Edit Admin' : 'Tambah Admin' ?></h2>

    <form 
      action="<?= isset($edit) ? '/admin/tambahadmin/update/' . $edit['id'] : '/admin/tambahadmin/simpan' ?>" 
      method="post" 
      class="bg-white p-6 rounded shadow-md space-y-4 max-w-md mb-10"
    >
      <div>
        <label for="nama" class="block font-medium">Nama</label>
        <input type="text" id="nama" name="nama" class="w-full border rounded px-3 py-2"
          value="<?= isset($edit) ? esc($edit['nama']) : '' ?>" required>
      </div>
      <div>
        <label for="email" class="block font-medium">Email</label>
        <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2"
          value="<?= isset($edit) ? esc($edit['email']) : '' ?>" required>
      </div>
      <div>
        <label for="password" class="block font-medium">Password <?= isset($edit) ? '(Kosongkan jika tidak diubah)' : '' ?></label>
        <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" <?= isset($edit) ? '' : 'required' ?>>
      </div>
      <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded">
        <?= isset($edit) ? 'Update Admin' : 'Simpan Admin' ?>
      </button>
      <?php if (isset($edit)) : ?>
        <a href="/admin/tambahadmin" class="text-sm text-gray-500 hover:underline ml-4">Batal Edit</a>
      <?php endif; ?>
    </form>

    <!-- Tabel Daftar Admin -->
    <h3 class="text-xl font-bold mb-3">Daftar Admin</h3>
    <table class="w-full bg-white rounded shadow-md">
      <thead class="bg-purple-700 text-white">
        <tr>
          <th class="p-2 text-left">Nama</th>
          <th class="p-2 text-left">Email</th>
          <th class="p-2 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($admins as $admin): ?>
          <tr class="border-t">
            <td class="p-2"><?= esc($admin['nama']) ?></td>
            <td class="p-2"><?= esc($admin['email']) ?></td>
            <td class="p-2 text-center">
              <a href="/admin/tambahadmin/edit/<?= $admin['id'] ?>" class="text-blue-500 hover:underline">Edit</a> |
              <a href="/admin/tambahadmin/hapus/<?= $admin['id'] ?>" class="text-red-500 hover:underline" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </main>
</div>

<script>
  lucide.createIcons();
</script>
</body>
</html>
