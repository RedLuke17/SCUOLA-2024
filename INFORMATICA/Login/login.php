<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $database = new SQLite3("database.db");

    // Controllo se l'utente esiste e la password è corretta
    $getUser = $database->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

    if ($getUser->fetchArray()) {
        echo "Login effettuato con successo!";
    } else {
        echo "Credenziali non valide. Riprova.";
    }
}
?>
