<?php

$jazyk = $_GET["jazyk"] ?? "cs";
$_SESSION["jazyk"] = $jazyk;

header("location: ?");
exit;

?>