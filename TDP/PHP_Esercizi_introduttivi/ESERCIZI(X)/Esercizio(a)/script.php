<?php
function getFrasi() {
    $frasi = array(
        "FRASE CELEBRE 1",
        "FRASE CELEBRE 2",
        "FRASE CELEBRE 3",
        "FRASE CELEBRE 4",
        "FRASE CELEBRE 5",
        "FRASE CELEBRE 6",
        "FRASE CELEBRE 7",
        "FRASE CELEBRE 8",
        "FRASE CELEBRE 9",
        "FRASE CELEBRE 10",
    );

    return $frasi[array_rand($frasi)];
}