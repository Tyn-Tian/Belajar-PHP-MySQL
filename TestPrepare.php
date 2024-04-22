<?php

require_once "./GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$result = $connection->prepare($sql);
$result->bindParam("username", $username);
$result->bindParam("password", $password);
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
