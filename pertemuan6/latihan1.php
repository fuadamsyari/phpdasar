<?php

$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kotak</title>
    <style>

        .div{
            width: 50px;
            height: 50px;
            line-height: 50px;
            background-color: salmon;
            text-align: center;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php foreach ($angka as $ank) : ?>
    <?php foreach ($ank as $a) :?>
        <div class="div"><?= $a;?></div>
    <?php endforeach ?>
    <div class="clear"></div>
<?php endforeach ?>


</body>
</html>