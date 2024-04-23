<?php

require_once "./GetConnection.php";

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$result = $connection->query($sql);

foreach ($result as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "Id : $id" . PHP_EOL;
    echo "name : $name" . PHP_EOL;
    echo "email : $email" . PHP_EOL;
}

$connection = null;