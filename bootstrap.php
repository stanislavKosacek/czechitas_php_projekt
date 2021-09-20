<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require "tridy/Uzivatel.php";
require "config/connection.php";
require "funkce.php";


$povoleneJazyky = ["cs" => "Čeština", "en" => "English"];
$jazyk = $_SESSION["jazyk"] ?? "cs";

$prihlasenyUzivatel = null;

if (isset($_SESSION["uzivatel"]) and $uzivatel = najdiUzivatelePodleId($_SESSION["uzivatel"], $pdo)) {
    $prihlasenyUzivatel = $uzivatel;
}

if (array_key_exists($jazyk, $povoleneJazyky)) {
    require "preklady/" . "$jazyk" . ".php";
} else {
    require "preklady/cs.php";
}


require "config/config.php";

?>