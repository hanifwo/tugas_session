<?php 
require_once("connection_toko.php");

// Mendapatkan Data id_barang

if ( isset($_POST["id_barang"]) ) $id_barang = $_POST["id_barang"];
else {
    echo "ID barang tidak ditemukan! <a href='index_toko.php'>kembali</a>";
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
if ( isset($_POST['foto']) ) $foto = $_POST['foto'];

if ( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];

if ( isset($_POST['barang']) ) $barang = $_POST['barang'];

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];

if ( isset($_POST['stok']) ) $stok = $_POST['stok'];

// echo $id_barang . $barang . $harga . $stok . $foto;

// Mengambil data upload
$files = $_FILES['foto'];
$path = "storage/";

// menangani file upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ( $upload ) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false;
}

// Menangani Error Saat mengupload
if ( $upload != true && $filepath != $foto ) {
    exit("Gagal Mengupload foto <a href='index_toko.php'>Kembali</a>");
}
// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE barang SET
        id_barang = '{$id_barang}',
        barang = '{$barang}',
        harga = '{$harga}',
        stok = '{$stok}',
        foto = '{$foto}'
    WHERE id_barang = '{$id_barang}'
";
var_dump($query);
// Mengesekusi MySQL Query
// $insert = mysqli_query($mysqli, $query);

// // Menangani ketika error pada saat eksekusi query
// if ( $insert === false) {
//     echo "Error dalam mengubah data. <a href='form_edit.php?nis={$nis}'>Kembali</a>";
// }
// else {
//     header("Location: index_toko.php");
// }
?>