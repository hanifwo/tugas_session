<?php

require_once("connection_toko.php");

// status tidak error
$error = 0;

//Memvalidasi Inputan

if ( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; //Status error
if ( isset($_POST['barang']) ) $barang = $_POST['barang'];
else $error = 1; //Status error
if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //Status error
if ( isset($_POST['stok']) ) $stok = $_POST['stok'];
else $error = 1; //Status error

if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();

}

$query = "
    INSERT INTO barang
    (id_barang, barang, harga, stok)
    VALUES
    ('{$id_barang}', '{$barang}', '{$harga}', '{$stok}');
";

//Mengkseksekusi MsSQL query
$insert = mysqli_query($mysqli, $query);

//Menangani ketika error pada saaat eksekusi query

if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href =='index.php'>Kembali</a>";
} 
else {
    header("Location: index_toko.php");
}
?>