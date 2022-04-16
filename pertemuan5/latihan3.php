<?php
 

 $mahasiswa = [
    ["fuad amsyari", "867458376", "sistem informasi", "fuad@gmail.com" ],
    ["elsa mualimatu", "348975934", "teknik informatika", "elsa@gmail.com"]




];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
</head>
<body>
    
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <h4>Data Mahasiswa</h4>
        <?php foreach ($mhs as  $m) :?>
            <li><?php echo $m; ?></li>
        <?php endforeach ?>
    </ul>
<?php endforeach ?>





</body>
</html>