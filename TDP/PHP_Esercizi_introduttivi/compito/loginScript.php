<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "giglo" && $password == "123"){
        session_start();
        $_SESSION["logged"] = true;
        echo "Bravo, ti sei loggato!
        <br>
        <a href='./menu.php'>premi un tasto per continuare</a>";
    } else {
        echo "Password sbagliata, riprova";
    }