<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Memanggil bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
            <!-- Bootstrap icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.5.0/font/bootstrap-icons.css"/>
            
            <!-- custom css -->
            <link rel="stylesheet" href="style.css"/>

            
    
</head>
<body>
    <div id="form" class="pt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col col-8 p-4 bg-light">
                        <form action="action_register_toko.php" method="POST">
                            
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Alamat E-mail">
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="nama">Nama Lengkap</label>
                                <input id="nama" class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password" placeholder="Kata Sandi"/>
                            </div>
                            <div class="form-group mb-2">
                                <label for="re-password">Konfirmasi Password</label>
                                <input id="re-password" class="form-control" type="password" name="re-password" placeholder="Konfirmasi Password"/>
                            </div>
                            <input name="submit" type="submit" class="btn btn-primary" value="kirim" />


                        </form>
                    </div>

                </div>
            </div>
    </div>

</body>
</html>