<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location: index.php");
};
require 'functions.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE user = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
    // cek pasword
    $row = mysqli_fetch_assoc($result);
    if ( password_verify($password, $row["password"])) {
      // memuat sesion
      $_SESSION["login"] = true;
      // redirect ke halama utama
      header("Location: index.php");
      exit;
    } else {
      echo "
            <script>
                alert('Password atau username Salah!');
            </script>
        ";
    }
    $error = true;
  }


};




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
        font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <meta name="theme-color" content="#7952b3">
</head>
<body>
  <div class="container">
    <h1 class="text-center">FA Service Management</h1>
    <main class="form-signin">
      <form class="text-center justify-content-center" action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">Silakan Login terlebih dahulu</h1>
        <?php if(isset($error)) : ?>
          <div class="alert alert-danger" role="alert">
            Password atau Username Salah!, Cek Kembali Password atau Username anda!
          </div>
        <?php endif ?>
        <div class="form-floating">
          <input type="email" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address / Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword" >Password</label>
        </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" name="remember"> Remember Me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
      </form>
    </main>
  </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>