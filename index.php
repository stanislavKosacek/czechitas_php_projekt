<?php

require "bootstrap.php";

$controllerNazev = $_GET["stranka"] ?? "domu";

$controllerSoubor = "controller/" . $controllerNazev . ".php";

if (is_file($controllerSoubor)) {
    require $controllerSoubor;
} else {
    http_response_code(404);
    include "controller/404.php";
}



require "page/layout.php";

?>
