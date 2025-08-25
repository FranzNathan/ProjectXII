<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "" || $password === "") {
        header("Location: register.php?error=Semua field wajib diisi!");
        exit;
    }
    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, 'User')";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: register.php?success=Registrasi berhasil! Silakan login.");
    } else {
        header("Location: register.php?error=Username sudah terdaftar!");
    }
    exit;
}
?>
