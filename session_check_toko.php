<?php 

//Start SESSION
session_start();

//Mengecek dan Mendapatkan SESSION status 
if ( isset($_SESSION["status"]) ) $sessionStatus = $_SESSION["status"];
else $sessionStatus = false;

//Mengecek dan Mendapatkan NAMA status 
if ( isset($_SESSION["nama"]) ) $sessionNama = $_SESSION["nama"];
else $sessionNama = "";

//Mengecek dan Mendapatkan EMAIL status 
if ( isset($_SESSION["email"]) ) $sessionEmail = $_SESSION["email"];
else $sessionEmail = "";

?>