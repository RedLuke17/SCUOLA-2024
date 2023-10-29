<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $log = $_POST["user"];
        $pass = $_POST["password"];

        controllo_login($log, $pass);
    }

    function controllo_login($log, $pass) {
        define("login", "admin");
        define("password", "nimda");

        if($log == login && $pass == password) {
            echo"login e password ok!";
        } 
        if($pass != password) {
            echo"password errata!";
        }
        if($log != login) {
            echo "login sbagliato!";
        }
    }
?>