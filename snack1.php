<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina. -->

<?php

$numbers = [];

function generate_numbers($min, $max, $n, $array)
{
    while (count($array) < $n) {
        $number = rand($min, $max);
        if (!in_array($number, $array)) $array[] = $number;
    }

    return $array;
}

$numbers = generate_numbers(1, 100, 15, $numbers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <ul>
        <?php foreach ($numbers as $number) : ?>
            <li><?= $number ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>