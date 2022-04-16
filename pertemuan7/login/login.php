<?php
// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    // cek data login
    if ($_POST["user"] == "admin" && $_POST["pass"] == "123" ) {
        // jika benar cek redirect ke halaman admin
        header("Location: dasboard.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $eror = true;
    };
}







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset($eror)) : ?>
    <h3>Password atau username salah</h3>
    <?php endif ?>
    <ul>
        <form action="" method="post" >
            <li>
                <label for="user">Usename</label>
                <input type="text" name="user" id="user">
            </li>
            <li>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
            
        </form>
    </ul>
</body>
</html>