<?php

require_once "./GetConnection.php";

$connection = getConnection();

$username = "tyn";
$password = "christian";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

if ($row = $result->fetch()) {
    echo "Sukses login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;