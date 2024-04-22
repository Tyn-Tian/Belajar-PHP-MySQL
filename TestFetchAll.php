<?php

require_once "./GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

$customers = $result->fetchAll();
var_dump($customers);

$connection = null;
