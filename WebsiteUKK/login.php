<?php
include 'config.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role     = $_POST['role'] ?? '';

if (empty($username) || empty($password) || empty($role)) {
    echo "<script>alert('Semua kolom wajib diisi!'); window.history.back();</script>";
    exit;
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    if ($role == 'Admin') {
        header("Location: dashboard/role/admin.php");
    } elseif ($role == 'Kasir') {
        header("Location: dashboard/role/kasir.php");
    } else {
        header("Location: dashboard/role/user.php");
    }
    exit;
} else {
    echo "<script>alert('Login gagal! Username / password / role salah.'); window.history.back();</script>";
}
?>
