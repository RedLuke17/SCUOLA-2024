<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $database = new SQLite3("database.db");
    
    // Controllo se l'utente esiste già
    $checkUser = $database->query("SELECT * FROM users WHERE username='$username'");
    
    if ($checkUser->fetchArray()) {
        echo "Utente già registrato. Scegli un altro username.";
    } else {
        // Inserisco l'utente nel database
        $insertUser = $database->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
        
        echo "Registrazione completata con successo!";
    }
}
?>
