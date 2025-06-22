<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://imip.co.id/wp-content/uploads/2024/06/DSC_3309_HDR-scaled.jpg');">
    
    <!-- Blur overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

    <!-- Login card -->
    <div class="relative z-10 bg-white/90 backdrop-blur-xl dark:bg-gray-800/80 p-8 rounded-2xl shadow-xl w-full max-w-4xl flex flex-col md:flex-row overflow-hidden">
      
      <!-- Gambar -->
      <div class="md:w-1/2 hidden md:block">
<img src="<?= base_url('asset/img/logo.png') ?>" alt="Logo Perusahaan" class="w-64 h-64 object-contain mx-auto" />
      </div>

      <!-- Form -->
      <div class="w-full md:w-1/2 p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login ke Sistem</h2>
        <form method="post" action="<?= site_url('login/submit') ?>" class="space-y-4">
          
          <!-- Email -->
          <div>
            <label for="inputEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="inputEmail" placeholder="email@domain.com"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
              required />
          </div>

          <!-- Password with Toggle -->
          <div>
            <label for="inputPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <div class="relative">
              <input type="password" name="password" id="inputPassword" placeholder="********"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10"
                required />
              <button type="button" onclick="togglePassword()" class="absolute right-3 top-2.5 text-gray-500 text-sm">
                👁️
              </button>
            </div>
          </div>

          <!-- Flash Message -->
          <?php if (session()->getFlashdata('error')) : ?>
            <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php endif; ?>

          <!-- Submit -->
          <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
            Login
          </button>
        </form>
      </div>
    </div>

    <!-- Toggle Script -->
    <script>
      function togglePassword() {
        const passwordInput = document.getElementById('inputPassword');
        passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
      }
    </script>
  </body>
</html>
