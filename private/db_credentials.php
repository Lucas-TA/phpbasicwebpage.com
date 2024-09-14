<?php
const DB_HOST = "localhost";
const DB_NAME = "globe_bank";
const DB_USER = "lucas";
const DB_PASSWORD = "123123";
const DB_CHARSET = "utf8mb4";

const DSN = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

const OPTIONS = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];