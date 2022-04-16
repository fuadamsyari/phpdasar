<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<?php if (isset($_POST["submit"])) :?>
    <h1>Selamt datang <?php echo $_POST["nama"] ?></h1>
<?php endif ?>

    <form action="" method="post">
        <label for="nama">Masukan Nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit" >Kirim</button>
    </form>

    <br>
    <br>




    <form action="latihan4.php" method="post">
        <label for="nama">Masukan Nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit" >Kirim</button>
    </form>
</body>
</html>