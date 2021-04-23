<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
    <!-- Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php
        $matchesInSpecificDate = [
            [
                'host' => [
                    'name' => 'A|X Armani Exchange Milano',
                    'score' => 102
                ],
                'guest' => [
                    'name' => 'UNAHOTELS Reggio Emilia',
                    'score' => 73
                ]
            ],
            [
                'host' => [
                    'name' => 'Vanoli Basket Cremona',
                    'score' => 80
                ],
                'guest' => [
                    'name' => 'Allianz Pallacanestro Trieste',
                    'score' => 101
                ]
            ],
            [
                'host' => [
                    'name' => 'Acqua S.Bernardo Cantù',
                    'score' => 82
                ],
                'guest' => [
                    'name' => 'Virtus Segafredo Bologna',
                    'score' => 91
                ]
            ],
            [
                'host' => [
                    'name' => 'Happy Casa Brindisi',
                    'score' => 77
                ],
                'guest' => [
                    'name' => 'Umana Reyer Venezia',
                    'score' => 89
                ]
            ]
        ];

        $matchesLength = count($matchesInSpecificDate);
        $matchesPrint = [];

        echo '<h1>Partite disputate il 17/01/2021:</h1>';
        for ($i = 0; $i < $matchesLength; $i++) {
            $matchesPrint[$i] = $matchesInSpecificDate[$i]['host']['name'] . ' - ' . $matchesInSpecificDate[$i]['guest']['name'] . ' | ' . $matchesInSpecificDate[$i]['host']['score'] . '-' . $matchesInSpecificDate[$i]['guest']['score'];
            echo '<h2>' . $matchesPrint[$i] . '</h2>';
        };
?>

    <!-- Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

</body>
</html>