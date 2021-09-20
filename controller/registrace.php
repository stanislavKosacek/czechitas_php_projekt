<?php

if ($prihlasenyUzivatel) {
    header("location: ?stranka=profil");
    exit;
}

$prezdivka = $_POST["prezdivka"] ?? null;
$email = $_POST["email"] ?? null;
$heslo = $_POST["heslo"] ?? null;
$zprava = "";


if ($prezdivka and $email and $heslo) {
    if (najdiUzivatelePodleEmailu($email, $pdo)) {
        $zprava = "Uživatel již existuje";
    } else {
        $dotaz = $pdo->prepare("INSERT into uzivatel (prezdivka, email, heslo, administrator) VALUES(?, ?, ?, ?)");
        $vysledek = $dotaz->execute([$prezdivka, $email, password_hash($heslo, PASSWORD_BCRYPT), 0]);
        header("location: ?stranka=prihlaseni");
        exit;
    }
}




$template = "registrace";

?>