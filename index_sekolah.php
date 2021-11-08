<?php

require_once("connection_sekolah.php");

require_once ("session_check_sekolah.php");

$query = "SELECT * FROM siswa";

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
            <a class="navbar-brand" href="#">Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index_sekolah.php">Daftar Siswa</a>
                    </li>

                    <?php if ( $sessionStatus == false ) : ?>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login_sekolah.php">Login</a>
                    </li>

                    <?php else : ?>
                
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout_sekolah.php">Logout</a>
                    </li>
                    
                    <?php endif; ?>
                </ul>
        
            </div>
        
        </div>
    
    </nav>

    <div id="student-list">

        <div class="container">
                
        <?php if ($sessionStatus) : ?>                

            <div class="row mb-4">
                
                <div class="col">
                    
                    <h2>Daftar Siswa</h2>

                </div>

                <div class="col text-end">

                    <a href="form_sekolah.php" class="btn btn-primary" role="button">Tambah Siswa</a>

                </div>

            </div>

                <div class="row">

                    <div class="col">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                <?php

                                    $i = 1;

                                    foreach ($result as $siswa) {


                                        $tglLahir = explode("-", $siswa["tgl_lahir"]);
                                        $tahunSekarang = date ("Y");

                                        $selisihTahun = $tahunSekarang - $tglLahir[0];

                                        echo '<tr>
                                            <th scope="row">' . $i++. '</th>
                                            <td>' . $siswa["nama"] . '</td>
                                            <td>' . $siswa["gender"] . '</td>
                                            <td>' . $siswa["address"] . '</td>
                                            <td>' . $selisihTahun . '</td>
                                            <td>' . $siswa["phone"] . '</td>   
                                            <td>

                                                <a href="form_edit_siswa.php?nis=' . $siswa["nis"] . '">Edit</a>
                                                <a href="delete_siswa.php?nis=' . $siswa["nis"] . '" onclick="return confirm_delete()"">Delete</a>

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