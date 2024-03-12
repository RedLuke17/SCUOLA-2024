<?php
    session_start();

    if(isset($_SESSION["logged"])) {
        if (!isset($_SESSION['contatore1'])) {
            $_SESSION["contatore1"] = 1;
        } else {
            $_SESSION["contatore1"]++;
        }

        echo "BENVENUTO nella PAGINA - 1 - del SITO
        <br><br>
        Ciao, questa pagina e' stata visitata da te ", $_SESSION["contatore1"], " volte
        <br><br>
        Il tuo codice identificativo in questa sessione e': ", session_id(), "
        <br><br>
        <a href='./menu.php'>Pagina2</a>";
    }