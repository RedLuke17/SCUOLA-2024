<?php
    $users = [
        ["id" => 1, "name" => "Jhonf Doe"],
        ["id" => 1, "name" => "Mancini Gqbriele"],
        ["id" => 1, "name" => "Giglo"],
        ["id" => 1, "name" => "Giglo MArtirado"],
        ["id" => 1, "name" => "SUS Doe"]
    ];

    http_response_code(200);
    header("Content-Type: application/json");
    echo json_encode($users);
