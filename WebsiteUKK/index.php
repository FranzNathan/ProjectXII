<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Hotel UKK</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Login Hotel FraLang</h2>

    <!-- Notifikasi Error -->
    <?php if (isset($_GET['error'])): ?>
      <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
        <?= htmlspecialchars($_GET['error']); ?>
      </div>
    <?php endif; ?>

    <form action="login.php" method="POST" onsubmit="return validateForm()">
      <div class="mb-4">
        <label class="block mb-1">Username</label>
        <input type="text" name="username" id="username" 
               class="w-full border px-3 py-2 rounded" 
               placeholder="Masukkan Username Anda" required>
      </div>
      <div class="mb-4">
        <label class="block mb-1">Password</label>
        <input type="password" name="password" id="password" 
               class="w-full border px-3 py-2 rounded" 
               placeholder="Masukkan Password Anda" required>
      </div>
      <div class="mb-4">
        <label class="block mb-1">Role</label>
        <select name="role" id="role" class="w-full border px-3 py-2 rounded" required>
          <option value="">Pilih Role Anda</option>
          <option value="Admin">Admin</option>
          <option value="Kasir">Kasir</option>
          <option value="User">User</option>
        </select>
      </div>
      <button type="submit" 
              class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Login
      </button>
    </form>

    <!-- Tambah link daftar -->
    <p class="text-center mt-4">
      Belum punya akun? 
      <a href="register.php" class="text-green-600 font-semibold hover:underline">Daftar di sini</a>
    </p>
  </div>

  <script>
    function validateForm() {
      const username = document.getElementById("username").value.trim();
      const password = document.getElementById("password").value.trim();
      const role = document.getElementById("role").value;

      if (!username || !password || !role) {
        alert("Semua kolom wajib diisi!");
        return false;
      }

      return true;
    }
  </script>

</body>
</html>
