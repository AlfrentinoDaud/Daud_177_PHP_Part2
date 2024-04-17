<?php
// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

date_default_timezone_set('Asia/Jakarta');
// Cek apakah username dan password sudah diisi
if(empty($username) || empty($password)) {
    //Tambahan untuk Nomor 2
    // Redirect ke halaman notPerfect.php jika data tidak lengkap
    header("Location: notPerfect.php");
    exit;
} else {
    $valid_username = "daudwell";
    $valid_password = "1234576890";

    if($username === $valid_username && $password === $valid_password) {
        // Jika login berhasil, tampilkan informasi
        $nama = "Alfrentino Daud";
        $email = "matrixD@gmail.com";
        $jam_login = date("h:i:s A");
        $hari_login = date("l");
        $tanggal_login = date("Y-m-d");

        echo "<center><h2>Selamat datang, $nama!</h2>";
        echo "<p style='text-align: center;'>Email: $email</p>";
        echo "<p style='text-align: center;'>Jam Login: $jam_login</p>";
        echo "<p style='text-align: center;'>Hari Login: $hari_login</p>";
        echo "<p style='text-align: center;'>Tanggal Login: $tanggal_login</p></center>";
        
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        echo "Login gagal. Username atau password salah.";
    }
}
?>