<?php
include "koneksi.php";

if (isset($_POST['login'])) { // Nama tombol di form Anda adalah 'login'
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $role     = $_POST['role'];
    
    // Logika Kelas: Jika Guru BK, set NULL atau kosong
    $kelas = ($role === 'guru_bk') ? null : mysqli_real_escape_string($koneksi, $_POST['kelas']);

    // 1. Cek apakah username sudah ada di database
    $cek_user = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        echo "<script>
                alert('Username sudah digunakan, silakan pilih username lain!');
                window.location.href='register.php';
              </script>";
        exit;
    }

    // 2. Hash password sebelum disimpan
    $password_aman = password_hash($password, PASSWORD_BCRYPT);

    // 3. Insert ke database
    $query = "INSERT INTO users (nama, username, password, role, kelas) 
              VALUES ('$nama', '$username', '$password_aman', '$role', '$kelas')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Pendaftaran Berhasil! Silakan Login.');
                window.location.href='login.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>