<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        'nome' => 'Sergio',
        'cognome' => 'Janko',
        'voti' => [7, 5, 4, 8,  9]
    ],
    [
        'nome' => 'Gianni',
        'cognome' => 'Rossi',
        'voti' => [8, 4, 4, 6, 7]
    ],
    [
        'nome' => 'Pinotto',
        'cognome' => 'Verdi',
        'voti' => [9, 7, 7, 8, 7]
    ],
    [
        'nome' => 'Mario',
        'cognome' => 'Bianchi',
        'voti' => [3, 5, 4, 8,  6]
    ],
    [
        'nome' => 'Luigi',
        'cognome' => 'Gialli',
        'voti' => [8, 3, 8, 8,  4]
    ],
];

function get_average($numbers)
{
    $average = 0;
    foreach ($numbers as $number) {
        $average += $number;
    }

    return $average / count($numbers);
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <?php foreach ($students as $student) : ?>
        <ul>
            <?= $student['nome'] . ' ' . $student['cognome'] . ' ' . get_average($student['voti']) ?>
        </ul>
    <?php endforeach ?>
</body>

</html>