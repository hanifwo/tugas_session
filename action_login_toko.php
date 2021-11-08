<?php 

// Panggil File Connection
require_once("connection_toko.php");


// Status tidak error
$error = 0;


// Memvalidasi Inputan
if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1; // Status error
if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1; // Status error

// Mengatasi Error Pada Inputan
if ( $error == 1 ) {
    echo "Terjadi Kesalahan Dalam proses input data <a href='login_toko.php>Kembali</a>'";
    exit();
}

// Hashing password
$password = hash("sha256", $password);

// Menyiapkan Query Untuk Di eksekusi
$query = "SELECT * FROM petugas WHERE email = '{$email}'";

// Mengeksekusi MySQL Query
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result);

if ( is_null($data) ) {
    echo "Email tidak terdaftar <a href ='login_toko.php'>Kembali</a>";
    exit();
}
else if ( $data['password'] != $password) {
    echo "Password salah <a href ='login_toko.php'>Kembali</a>";
    exit();
}
else {
    // Memulai fungsi SESSION, SESSION hanya dapat digunakan setelah fungsi ini
    session_start();

    $_SESSION["status"] = true;
    $_SESSION["nama"] = $data["nama"];
    $_SESSION["email"] = $data["email"];

    header("Location: index_toko.php");
}
?>