<?php
$users = [
    ['id' => 1, 'name' => 'John Doe'],
    ['id' => 2, 'name' => 'Jane Doe'],
    ['id' => 3, 'name' => 'Alice'],
    ['id' => 4, 'name' => 'Bob'],
];

$data = [
    "status" => 200,
    "payload" => $users,
    "message" => "OK"
];



http_response_code(200);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
echo json_encode($data);
exit;