<?php 
require 'functions.php';

if (isset($_POST["register"])) {
    

    if (regristrasi($_POST) > 0) {
        echo "
            <script>
                alert('User baru berhasil ditambahkan!');
            </script>
        ";
        
    } else {
        echo mysqli_error($conn);
    };
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body, html {
            background-color: #ebebeb;
        }
    </style>
</head>
<body>
    <div class="pt-3 container">
        <h1 class=" pt-5 text-center">Halaman Regristrasi</h1>
        <form action="" method="post" class="d-flex justify-content-center">
            <div class="card w-75 ">
                <div class="card-header">
                    <h3>Regristrasi</h3>
                </div>
                <div class="card-body ">
                <div class="lg-3">
                    <label for="Email" class="form-label">Username / Email address</label>
                    <input type="text" class="form-control" name="username" id="Email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email atau username Anda kepada orang lain.</div>
                </div>
                <div class="lg-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class=" mb-3 lg-3">
                    <label for="password2" class="form-label">Password Lagi</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                </div>
                <button type="submit" class=" btn btn-primary" name="register">Kirim</button>
                </div>
            </div>
        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>