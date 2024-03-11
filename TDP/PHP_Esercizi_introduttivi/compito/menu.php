<?php
    session_start();

    if(isset($_SESSION["logged"])) {
        echo "BENVENUTO nel nostro SPLENDIDO SITO
        <br><br>
        1 - <a href='./pagina1.php'>Pagina1</a>
        <br>
        2 - <a href='./pagina2.php'>Pagina2</a>
        <br>
        3 - <a href='./pagina3.php'>Pagina3</a>
        <br><br>
        X - <a href='./chiudi.php'>Pagina1</a>";
    } else {
        echo "Non sei loggato <a href='./index.html'>torna indietro</a>";
    }