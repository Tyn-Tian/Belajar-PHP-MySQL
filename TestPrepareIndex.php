<?php

require_once "./GetConnection.php";

$connection = getConnection();

$username = "tyn";
$password = "salah";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->bindParam(1, $username);
$result->bindParam(2, $password);
$result->execute();

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