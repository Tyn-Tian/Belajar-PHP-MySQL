<?php

require_once "./GetConnection.php";

$connection = getConnection();

$username = "tyn";
$password = "christian";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

$success = false;
$find_user = null;

foreach ($result as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;