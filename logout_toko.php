<?php

//Start session
session_start();

//Menghapus semua session yang sudah didefinisikan
session_destroy();


//Mengarahkan menuju halaman login
header("Location: login_toko.php");

?>