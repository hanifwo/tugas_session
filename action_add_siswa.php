<?php

require_once("connection_sekolah.php");

// status tidak error
$error = 0;

//Memvalidasi Inputan

if ( isset($_POST['nis']) ) $nis = $_POST['nis'];
else $error = 1; //Status error
if ( isset($_POST['nama']) ) $nama = $_POST['nama'];
else $error = 1; //Status error
if ( isset($_POST['gender']) ) $gender = $_POST['gender'];
else $error = 1; //Status error
if ( isset($_POST['address']) ) $address = $_POST['address'];
else $error = 1; //Status error
if ( isset($_POST['placeOfBirth']) ) $placeOfBirth = $_POST['placeOfBirth'];
else $error = 1; //Status error
if ( isset($_POST['dateOfBirth']) ) $dateOfBirth = $_POST['dateOfBirth'];
else $error = 1; //Status error
if ( isset($_POST['phone']) ) $phone = $_POST['phone'];
else $error = 1; //Status error

if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();

}

$query = "
    INSERT INTO siswa
    (nis, nama, gender, address, tmp_lahir, tgl_lahir, phone, id_jurusan)
    VALUES
    ('{$nis}', '{$nama}', '{$gender}', '{$address}', '{$placeOfBirth}', '{$dateOfBirth}', '{$phone}', 0);
";
   

//Mengkseksekusi MsSQL query
$insert = mysqli_query($mysqli, $query);

//Menangani ketika error pada saaat eksekusi query

if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href =='index_sekolah.php'>Kembali</a>";
} 
else {
    header("Location: index_sekolah.php");
}
?>