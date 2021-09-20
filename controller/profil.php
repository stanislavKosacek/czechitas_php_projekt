<?php

if (!$prihlasenyUzivatel) {
    header("location: ?stranka=prihlaseni");
    exit;
}

$template = "profil";

?>