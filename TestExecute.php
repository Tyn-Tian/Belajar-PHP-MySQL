<?php

require_once "./GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    insert into customers(id, name, email)
    values ("Tyn", "Christian", "test@gmail.com") 
SQL;

$connection->exec($sql);

$connection = null;