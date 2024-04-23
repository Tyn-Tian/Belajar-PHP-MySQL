<?php

require_once './GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('test@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('test@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('test@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('test@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('test@gmail.com', 'hi')");

$connection->commit();

$connection = null;