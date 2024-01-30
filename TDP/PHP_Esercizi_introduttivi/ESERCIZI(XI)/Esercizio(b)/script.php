<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST["remember"])) {
        setcookie("login", $username, time()+86400);
        setcookie("password", $password, time()+86400);
        if ($username == $_COOKIE["login"] && $password == $_COOKIE["password"]) {
            header("Location: paginariservata.php");
        }
        echo "Il cookie e' stato settato per un giorno e ha value ", $_COOKIE["login"], " ", $_COOKIE["password"];
    } else {
        setcookie("login", $username, time());
        setcookie("password", $password, time());
        echo "Il cookie e' stato settato momentaneamente e ha value ", $_COOKIE["login"], " ", $_COOKIE["password"];
    }