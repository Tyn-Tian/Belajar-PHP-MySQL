<?php

require_once './GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('Budi@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Budi@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Budi@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Budi@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Budi@gmail.com', 'hi')");

$connection->rollBack();

$connection = null;