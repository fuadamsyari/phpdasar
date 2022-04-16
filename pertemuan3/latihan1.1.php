<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1.1</title>
    <style>
    table, tr, td{
        border: 1px solid black;
    }

    .warnabaris{
        background-color: salmon;
    }
    </style>
</head>
<body>
    

<table >
   <?php for ($i=1; $i <= 5 ; $i++) : ?>
    <?php if ($i % 2 == 1) : ?>
         <tr class="warnabaris">
    <?php else : ?>
         <tr>
    <?php endif; ?>
            <?php for ($j=1; $j <= 5; $j++) : ?>
                <td><?=  "$i, $j" ?></td>
            <?php endfor ?>
        </tr>
   <?php endfor ?>
</table>




</body>
</html>