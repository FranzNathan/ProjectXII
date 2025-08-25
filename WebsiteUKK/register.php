<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Hotel UKK</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Daftar Akun Baru</h2>

    <?php if (isset($_GET['error'])): ?>
      <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
        <?= htmlspecialchars($_GET['error']); ?>
      </div>
    <?php elseif (isset($_GET['success'])): ?>
      <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
        <?= htmlspecialchars($_GET['success']); ?>
      </div>
    <?php endif; ?>

    <form action="register_process.php" method="POST">
      <div class="mb-4">
        <label class="block mb-1">Username</label>
        <input type="text" name="username" class="w-full border px-3 py-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block mb-1">Password</label>
        <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
      </div>
      <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
        Daftar
      </button>
    </form>

    <p class="text-center mt-4">
      Sudah punya akun? <a href="index.php" class="text-blue-500">Login</a>
    </p>
  </div>

</body>
</html>
