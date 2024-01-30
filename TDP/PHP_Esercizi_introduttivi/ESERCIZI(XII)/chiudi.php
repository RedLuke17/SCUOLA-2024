<?php
    session_start();
    
    if(isset($_SESSION["logged"])) {
        session_destroy();
        echo "CIAO! arrivederci dal nostro SITO";
    }