<?php
    session_start();

    if(isset($_SESSION["logged"])) {
        if (!isset($_SESSION['contatore3'])) {
            $_SESSION["contatore3"] = 1;
        } else {
            $_SESSION["contatore3"]++;
        }

        echo "BENVENUTO nella PAGINA - 3 - del SITO
        <br><br>
        Ciao, questa pagina e' stata visitata da te ", $_SESSION["contatore3"], " volte
        <br><br>
        Il tuo codice identificativo in questa sessione e': ", session_id(), "
        <br><br>
        <a href='./menu.php'>Pagina2</a>";
    }