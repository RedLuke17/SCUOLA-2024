<?php
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];

    $value = "$nome $cognome";

    setcookie("Utente", $value, time()+86400);

    if(!isset($_COOKIE["Utente"])) {
        echo "Il cookie utente non e' stato ancota settato";
    } else {
        echo "il cookie e' settato, il suo valore e ", $_COOKIE["Utente"];
    }