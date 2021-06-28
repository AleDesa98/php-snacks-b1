<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $campionato = [
        [
            "s_casa" => "Chicago Bulls",
            "s_ospite" => "Golden State Warriors",
            "punti_s_casa" => 25,
            "punti_s_ospite" => 17
        ],
        [
            "s_casa" => "Los Angeles Lakers",
            "s_ospite" => "Boston Celtics",
            "punti_s_casa" => 45,
            "punti_s_ospite" => 32
        ],
        [
            "s_casa" => "Philadelphia 76ers",
            "s_ospite" => "Boston Celtics",
            "punti_s_casa" => 35,
            "punti_s_ospite" => 28
        ],
        [
            "s_casa" => "Miami Heat",
            "s_ospite" => "Cleveland Cavaliers",
            "punti_s_casa" => 29,
            "punti_s_ospite" => 12
        ],
        [
            "s_casa" => "Boston Celtics",
            "s_ospite" => "Golden State Warriors",
            "punti_s_casa" => 19,
            "punti_s_ospite" => 26
        ]
    ];
    for ($i = 0; $i < count($campionato); $i++) {
        echo $campionato[$i]["s_casa"] . " - " . $campionato[$i]["s_ospite"] . " | " . $campionato[$i]["punti_s_casa"] . "-" . $campionato[$i]["punti_s_ospite"] . "<hr>";
    };
?>