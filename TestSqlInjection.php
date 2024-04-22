<?php

require_once "./GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "salah gak peduli";
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

echo $sql . PHP_EOL;

$result = $connection->query($sql);

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