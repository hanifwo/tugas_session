<?php 

// Panggil File Connection.php
require_once("connection_toko.php");

// Status tidak error
$error = 0;


// Memvalidasi Inputan
if( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1; //Status error

if( isset($_POST['nama']) ) $nama = $_POST['nama'];
else $error = 1; //Status error

if( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1; //Status error

if( isset($_POST['re-password']) ) $repassword = $_POST['re-password'];
else $error = 1; //Status error


// Mengatasi jika ada error pada data inputan
if( $error == 1 ) {
    echo "Terjadi kesalahan dalam proses input data! <a href='registration_toko.php'>Kembali</a>";
    exit();
}

else {
    $password = hash("sha256", $password);
}


// Menyiapkan Query MySQL untuk Dieksekusi
$query = "
    INSERT INTO petugas
    (email, nama, password)
    VALUES
    ('{$email}','{$nama}', '{$password}');";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);


//Menangani error pada saat esksekusi query 
if ( $insert == false ) {
    echo "Error dalam menambahkan data! <a href='registration_toko.php'>Kembali</a>";
}
else {
    header("Location: index_toko.php");
}


?>