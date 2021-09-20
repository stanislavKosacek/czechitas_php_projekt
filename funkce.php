<?php

function preloz(string $prekladovyRetezec): string
{
    return TEXTY[$prekladovyRetezec] ?? $prekladovyRetezec;
}


function najdiUzivatelePodleEmailu($email, $pdo): ?Uzivatel
{
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel WHERE email = :email");
    $dotaz->execute(["email" => $email]);
    $uzivatel = $dotaz->fetch(PDO::FETCH_ASSOC);

    if ($uzivatel) {
        return new Uzivatel($uzivatel["id"], $uzivatel["prezdivka"], $uzivatel["heslo"], $uzivatel["email"], $uzivatel["administrator"]);
    } else {
        return null;
    }
    
}



function najdiUzivatelePodleId($id, $pdo): ?Uzivatel
{
    $dotaz = $pdo->prepare("SELECT * FROM uzivatel WHERE id = :id");
    $dotaz->execute(["id" => $id]);
    $uzivatel = $dotaz->fetch(PDO::FETCH_ASSOC);

    if ($uzivatel) {
        return new Uzivatel($uzivatel["id"], $uzivatel["prezdivka"], $uzivatel["heslo"], $uzivatel["email"], $uzivatel["administrator"]);
    } else {
        return null;
    }
    
}



?>