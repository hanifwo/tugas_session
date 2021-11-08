<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="method.css"/>
    <title>Form</title>
</head>
<body>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <h2 class="mb-4">Login Petugas</h2>
                    <form action="action_login_toko.php" method="POST">
                        
                        <div class="form-group mb-2">
                            <label for="email">Alamat Email</label>
                            <input id="email" class="form-control" type="email" name="email" placeholder="Alamat E-mail" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <input name="submit" type="submit" class="btn btn-primary mt-4" value="Masuk" />

                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>