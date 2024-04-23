<?php

require_once "./GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("Tyn", "Christian", "test@gmail.com") 
SQL;

$connection->exec($sql);

$connection = null;