<?php


$id = $_GET["clanek"] ?? null;

if($id) {
    $dotaz = $pdo->prepare("SELECT * FROM clanek WHERE id = :idClanku");
    $dotaz->execute(["idClanku" => $id]);
    $clanek = $dotaz->fetch(PDO::FETCH_ASSOC);

    if($clanek) {
        $template = "blog-detail";
    } else {
        $template = "404";
    }

} else {

    $template = "blog";

    $dotaz = $pdo->prepare("SELECT * FROM clanek");
    $dotaz->execute();
    $clanky = $dotaz->fetchAll(PDO::FETCH_ASSOC);

}






?>