<?php

if ($prihlasenyUzivatel) {
    header("location: ?stranka=profil");
    exit;
}

$email = $_POST["email"] ?? null;
$heslo = $_POST["heslo"] ?? null;
$zprava = "";



if ($email and $heslo) {
    $uzivatel = najdiUzivatelePodleEmailu($email,$pdo);
    if($uzivatel){
        if ($uzivatel->overHeslo($heslo)) {
            $_SESSION["uzivatel"] = $uzivatel->vratId();
            header("location: ?stranka=profil");
            exit;
        } else {
            $zprava = "Zkus to znovu";
        }
    }else{
        $zprava = "Zkus to znovu";
    }
}    


$template = "prihlaseni";

?>