<?php 

require_once("connection_toko.php");

//Mendapatkan Data barang
if ( isset ($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
else {
    echo "ID barang tidak ditemukan <a href='index_toko.php'>Kembali</a>";
    exit();
}

//Query get data barang
$query = "DELETE FROM barang WHERE id_barang = '{$id_barang}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    exit("Gagal menghapus data!");
}

header("Location: index_toko.php");

?>