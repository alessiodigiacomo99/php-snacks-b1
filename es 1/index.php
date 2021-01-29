<?php
$matches = [
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Virtus Roma",
        "punteggio_casa" => 60 ,
        "punteggio_trasferta" => 60 
    ],
    [
        "casa" => "Torino",
        "ospite" => "Bologna",
        "punteggio_casa" => 50 ,
        "punteggio_trasferta" => 55 
    ],
    [
        "casa" => "Fortitudo",
        "ospite" => "Cantù",
        "punteggio_casa" => 70 ,
        "punteggio_trasferta" => 80 
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div><?php for($i = 0; $i < count($matches); $i++) echo $matches[$i]["casa"] . " - " . $matches[$i]["ospite"] . " | " . $matches[$i]["punteggio_casa"] . " - " . $matches[$i]["punteggio_trasferta"] . " // "?></div>
    </body>
</html>
<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->