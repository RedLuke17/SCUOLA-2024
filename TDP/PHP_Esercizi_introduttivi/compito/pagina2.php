<?php
    session_start();

    if(isset($_SESSION["logged"])) {
        if (!isset($_SESSION['contatore2'])) {
            $_SESSION["contatore2"] = 1;
        } else {
            $_SESSION["contatore2"]++;
        }

        echo "BENVENUTO nella PAGINA - 2 - del SITO
        <br><br>
        Ciao, questa pagina e' stata visitata da te ", $_SESSION["contatore2"], " volte
        <br><br>
        Il tuo codice identificativo in questa sessione e': ", session_id(), "
        <br><br>
        <a href='./menu.php'>Pagina2</a>";
    }