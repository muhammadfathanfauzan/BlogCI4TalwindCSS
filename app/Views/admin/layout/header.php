    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-3xl font-semibold">Dashboard</h2>
      <div class="flex items-center gap-4">
<span>Selamat datang, <?= esc(session()->get('username') ?? 'Admin') ?>!</span>
        <img src="https://i.pravatar.cc/40" alt="avatar" class="rounded-full" />
      </div>
    </div>
