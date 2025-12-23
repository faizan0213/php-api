<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$users = [
    [
        "id" => 1,
        "name" => "Rohit Kumar",
        "email" => "rohit@example.com"
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com"
    ],
    [
        "id" => 3,
        "name" => "Vikram Singh",
        "email" => "vikram@example.com"
    ]
];

echo json_encode([
    "status" => true,
    "data" => $users
]);
