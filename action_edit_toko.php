<?php 
require_once("connection_toko.php");

// Mendapatkan Data id_barang

if ( isset($_POST["id_barang"]) ) $id_barang = $_POST["id_barang"];
else {
    echo "ID barang tidak ditemukan! <a href='index.php'>kembali</a>";
    exit();

}

//Query Get Data Barang
$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";


// Eksekusi query
$query = mysqli_query($mysqli, $query);

// Fetching Data
// foreach ( $result as $barang) {

// $id_barang = $barang['id_barang'];
// $barang = $barang['barang'];
// $stok = $barang['stok'];
// $harga = $barang['harga'];

//}

// if ( isset($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
// if ( isset($_GET["nama_barang"]) ) $barang = $_GET["nama_barang"];
// echo($barang);
// if ( isset($_GET["harga"]) ) $harga = $_GET["harga"];
// if ( isset($_GET["stok"]) ) $stok = $_GET["stok"];
// else echo "ID barang tidak ditemukan! <a href='index.php'>Kembali</a>";

if ( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];

if ( isset($_POST['barang']) ) $barang = $_POST['barang'];

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];

if ( isset($_POST['stok']) ) $stok = $_POST['stok'];
echo $id_barang . $barang . $harga . $stok;
// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE barang SET
        id_barang = '{$id_barang}',
        barang = '{$barang}',
        harga = '{$harga}',
        stok = '{$stok}'
    WHERE id_barang = '{$id_barang}'
";

// Mengesekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
if ( $insert === false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index_toko.php");
}
?>