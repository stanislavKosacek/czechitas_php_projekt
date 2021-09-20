<?php
/** @sk zdroj: https://jecas.cz/pdo */

// Připojovací údaje
define('SQL_HOST', 'database.skosacek.cz');
define('SQL_DBNAME', 'skosacekkurz');
define('SQL_USERNAME', 'skosacekkurz');
define('SQL_PASSWORD', 'GWpZB&^anDtoWn2g9R');

$dsn = 'mysql:dbname=' . SQL_DBNAME . ';host=' . SQL_HOST . ';charset=utf8mb4';
$user = SQL_USERNAME;
$password = SQL_PASSWORD;

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

