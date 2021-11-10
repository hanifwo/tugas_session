<?php

require_once("connection_toko.php");

require_once("session_check_toko.php");

$query = "SELECT * FROM barang";

$result = mysqli_query($mysqli, $query);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" />
    <script type="text/javascript">
    function confirm_delete() {
        return confirm ("Are you sure you want to delete");
    }
    </script>
    <title>php & mysql</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CALORe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_toko.php">Daftar Barang</a>
            </li>

            <?php if ( $sessionStatus == false ) : ?>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login_toko.php">Login</a>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout_toko.php">Logout</a>
                </li>

                <?php endif; ?>
        
        </ul>
     </div>
    </div>
    </nav>

    <div id="barang-list">

        <div class="container">

            <?php if ($sessionStatus) : ?>

                <div class="row mb-4">
                    
                    <div class="col">
                        
                        <h2>Daftar Barang</h2>

                    </div>

                    <div class="col text-end">

                        <a href="form_toko.php" class="btn btn-primary" role="button">Tambah Barang</a>

                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                <?php

                                    $i = 1;

                                    foreach ($result as $barang) {

                                        if ( $barang['foto'] == null || empty ($barang["foto"]) ) {
                                            $barang['foto'] = 'storage/default.jpg';
                                        }


                                        echo '<tr>
                                            <th scope="row">' . $i++. '</th>
                                            <td><img src="' . $barang["foto"] . '"</td>
                                            <td>' . $barang["id_barang"] . '</td>
                                            <td>' . $barang["barang"] . '</td>
                                            <td>' . $barang["harga"] . '</td>
                                            <td>' . $barang["stok"] . '</td>   
                                            <td>

                                                <a href="form_edit_toko.php?id_barang=' . $barang["id_barang"] .
                                                                        "&harga=" . $barang["harga"] .
                                                                        "&stok=" . $barang["stok"] . 
                                                                        "&foto=" . $barang["foto"] .
                                                                        "&nama_barang=" . $barang["barang"] .'">Edit</a>
                                                <a href="delete_barang.php?id_barang=' . $barang["id_barang"] . '" onclick="return confirm_delete()"">Delete</a>

                                            </td>                             
                                        </tr>';

                                    }

                                ?>


                            </tbody>
                        </table>

                    </div>
        
                </div>
             <?php else : ?>
                
                <div class="row">
                    <div class="col">
                        <h2>Login Terlebih Dahulu!</h2>
                    </div>
                </div>
                    
            <?php endif; ?>
        </div>
    </div>

</body>
</html>