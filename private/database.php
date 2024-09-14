<?php
require "db_credentials.php";

try {
// Creating a new PDO instance
    $pdo = new PDO(DSN, DB_USER, DB_PASSWORD, OPTIONS);
    echo "Connected successfully!";
} catch (\PDOException $e) {
// Handling the exception if connection fails
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
