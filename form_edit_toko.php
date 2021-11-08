<?php

// Pemanggilan File Koneksi
require_once("connection_toko.php");


// Status tidak Error 
$error = 0;


// Mendapatkan Data ID Barang
if ( isset($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
if ( isset($_GET["nama_barang"]) ) $barang = $_GET["nama_barang"];
echo($barang);
if ( isset($_GET["harga"]) ) $harga = $_GET["harga"];
if ( isset($_GET["stok"]) ) $stok = $_GET["stok"];
else echo "ID barang tidak ditemukan! <a href='index.php'>Kembali</a>";

// // var_dump($result);
// foreach ($result as $barang) {
    
//     $id_barang  = $barang["id_barang"];
//     $barang     = $barang["barang"];
//     if (isset($barang["harga"])){
//         $harga["harga"];
//         echo ($harga);
//     }else {
        
//     }
        
    
// }


?>

<html>


    <head>
            

            <!-- Memanggil bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
            <!-- Bootstrap icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.5.0/font/bootstrap-icons.css"/>
            
            <!-- custom css -->
            <link rel="stylesheet" href="style.css"/>

            <tittle>Input Form</tittle>
    </head>

    <body>
        <div id="form" class="pt-5">
            <div class="container">
                    <div class="row d-flex justify-content-center">
                    <div class="col col-8 p-4 bg-light">
                        <form action="action_edit_toko.php" method="POST">
                            
                            <div class="form-group mb-2">
                                <label for="id_barang">Id Barang</label>
                                <input id="id_barang" value="<?=$id_barang?>" class="form-control" type="text" name="id_barang" placeholder="Id Barang">
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="barang">Nama barang</label>
                                <input id="barang" value="<?=$barang?>" class="form-control" type="text" name="barang" placeholder="Nama Barang">
                            </div>
                            <div class="form-group mb-2">
                                <label for="harga">Harga</label>
                                <input id="harga" value="<?=$harga?>" class="form-control" type="number" name="harga" placeholder="Harga"/>
                            </div>
                            <div class="form-group mb-2">
                                <label for="stok">Stok</label>
                                <input id="stok" value="<?=$stok?>" class="form-control" type="number" name="stok" placeholder="Stok"/>
                            </div>
                            <input name="submit" type="submit" class="btn btn-primary" value="kirim" />


                        </form>
                    </div>

                </div>
            </div>
        </div>
        
    </body>
</html>
