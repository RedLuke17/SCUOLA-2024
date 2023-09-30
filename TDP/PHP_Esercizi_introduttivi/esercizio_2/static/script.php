<?php
    define("NOME","giglo");
    define("PASSWORD", "giglo1324");

    $nome = $_POST["nome"];
    $password = $_POST["password"];


    if (NOME === $nome && PASSWORD === $password) {
        if (isset($_POST["infoHTML"])) {
            echo "Hai selezionato: ",$_POST["infoHTML"],"<br/>";
        } 
        if (isset($_POST["immagini"])) {
            echo "Hai selezionato: ",$_POST["immagini"],"<br/>";
        }
        if (isset($_POST["collegamentiEurl"])) {
            echo "Hai selezionato: ",$_POST["collegamentiEurl"],"<br/>";
        }
        if (isset($_POST["oggettiMultimediali"])) {
            echo "Hai selezionato: ",$_POST["oggettiMultimediali"],"<br/>";
        }
        if (isset($_POST["XHTMLv1_0"])) {
            echo "Hai selezionato: ",$_POST["XHTMLv1_0"],"<br/>";
        }
    } else {
        echo "Hai inserito i dati sbagliati";
    }
?>