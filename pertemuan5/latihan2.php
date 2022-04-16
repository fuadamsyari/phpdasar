<?php
// PENGULANAGAN pada array
// for / foreach


$angka = [1,2,3,4,5,6,7,8];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    
    <style>
    .div {
        width: 50px;
        height: 50px;
        background-color: salmon;
        margin: 3px;
        line-height: 50px;
        text-align: center;
        float: left;
    }
    .clear {
        clear: both;
    }



    </style>
</head>
<body>

<?php for ($i=0; $i < count($angka) ; $i++) :?>
    <div class="div"><?php echo $angka[$i]; ?></div>
<?php endfor  ?>
<div class="clear"></div>
<?php foreach ($angka as $key => $value) : ?>
    <div class="div"><?= $value; ?></div>
<?php endforeach ?>
</body>
</html>

