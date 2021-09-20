<?php

$akce = $_GET["akce"] ?? null;
$id = $_GET["id"] ?? null;


$nazev = $_POST["nazev"] ?? null;
$perex = $_POST["perex"] ?? null;
$text = $_POST["text"] ?? null;
$obrazek = $_POST["obrazek"] ?? null;


$puvodniNazev = null;
$puvodniPerex = null;
$puvodniText = null;
$puvodniObrazek = null;

if ($akce === "clanek") {

    if ($id) {
        $dotaz = $pdo->prepare("SELECT * FROM clanek WHERE id = :idClanku");
        $dotaz->execute(["idClanku" => $id]);
        $clanek = $dotaz->fetch(PDO::FETCH_ASSOC);

        if ($clanek) {
            $puvodniNazev = $clanek["nazev"];
            $puvodniPerex = $clanek["perex"];
            $puvodniText = $clanek["text"];
            $puvodniObrazek = $clanek["obrazek"];
            
            if ($nazev and $perex and $text and $obrazek) {
                $dotaz = $pdo->prepare("UPDATE clanek SET nazev = :nazev, perex = :perex, text = :text, obrazek = :obrazek WHERE id = :id");
                $vysledek = $dotaz->execute(
                    [
                "nazev" => $nazev,
                "perex" => $perex,
                "text" => $text,
                "obrazek" => $obrazek,
                "id" => $id,
                ]
                );
                header("location: ?stranka=blog");
                exit;
            }


            $template = "blog-clanek";
        } else {
            $template = "404";
        }
    } else {
    
        if ($nazev and $perex and $text and $obrazek) {
            $dotaz = $pdo->prepare("INSERT into clanek (nazev, perex, text, autor, obrazek, pridano) VALUES(?, ?, ?, ?, ?, ?)");
            $vysledek = $dotaz->execute([$nazev, $perex, $text, $prihlasenyUzivatel->vratPrezdivku(), $obrazek, (new DateTime())->format("Y-m-d H:i:s")]);
            header("location: ?stranka=blog");
            exit;
        }
        $template = "blog-clanek";
    }
    
    

} else if ($akce === "smazatClanek") {
    if ($id) {
        $dotaz = $pdo->prepare("DELETE FROM clanek WHERE id = :id");
        $vysledek = $dotaz->execute(["id" => $id]);
        header("location: ?stranka=blog");
        exit;
    }
} else {
    $dotaz = $pdo->prepare("SELECT * FROM clanek");
    $dotaz->execute();
    $clanky = $dotaz->fetchAll(PDO::FETCH_ASSOC);
    
    $template = "blog";
}



?>