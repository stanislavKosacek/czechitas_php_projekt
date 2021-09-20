<?php

const MOJE_UDAJE = [
    "jmeno" => "Standa",
    "prijmeni" => "Kosáček",
    "datumNarozeni" => "2. 7. 1991",
    "adresa" => "Severní 5, České Budějovice, 37010",
    "telefon" => "+420 702 048 957",
    "email" => "stanislav.kosacek@icloud.com",
];

$menu = [
    ["text" => preloz("menu.domu"), "stranka" => "domu", "id" => "#home-section"],
    ["text" => preloz("menu.omne"), "stranka" => "domu", "id" => "#about-section"],
    ["text" => preloz("menu.zivotopis"), "stranka" => "domu", "id" => "#resume-section"],
    ["text" => preloz("menu.sluzby"), "stranka" => "domu", "id" => "#services-section"],
    ["text" => preloz("menu.blog"), "stranka" => "blog", "id" => ""],
];

$jaJsem = ["Programátor.", "Lektor.", "Czechiťák."];


$vzdelani = [
    ["nazev" => "Základní Škola", "obor" => "Základní", "od" => 2010, "do" => 2014, "popis" => "První popis"],
    ["nazev" => "Střední Škola", "obor" => "Nějaký obor 2", "od" => 2014, "do" => 2016, "popis" => "Druhý popis"],
    ["nazev" => "Vysoká Škola", "obor" => "Nějaký obor 3", "od" => 2016, "do" => 2020, "popis" => "Třetí popis"],
];


$pracovniZkusenosti = [
    ["firma" => "KB a.s.", "pozice" => "Pozice", "od" => 2010, "do" => 2019, "popis" => "Popis 1"],
    ["firma" => "QOP s.r.o.", "pozice" => "Php vývojář", "od" => 2019, "do" => date("Y"), "popis" => "Programování nette"],
];

$hlavniSchopnosti = [
    ["schopnost" => "PHP", "hodnota" => 70],
    ["schopnost" => "Nette", "hodnota" => 85],
    ["schopnost" => "HTML5", "hodnota" => 90],
];

$vedlejsiSchopnosti = [
    ["schopnost" => "CSS3", "hodnota" => 65],
    ["schopnost" => "jQuery", "hodnota" => 70],
    ["schopnost" => "JavaScript", "hodnota" => 60],
    ["schopnost" => "Vue.js", "hodnota" => 30],
];

$sluzby = [
    ["sluzba" => "Programování", "popis" => "Nějaký popis pro danou službu. 👨‍💻"],
    ["sluzba" => "Kódování", "popis" => "Nějaký popis pro danou službu. 💻"],
    ["sluzba" => "Sekání zahrady", "popis" => "Nějaký popis pro danou službu. 🥀"],
    ["sluzba" => "Lektorování", "popis" => "Nějaký popis pro danou službu. 👨‍🏫"],
    ["sluzba" => "První pomoc", "popis" => "Nějaký popis pro danou službu. 🚑"],
    ["sluzba" => "Koukání na televizi", "popis" => "Nějaký popis pro danou službu. 📺"],
];


function vypisVzdelani(array $skoly)
{
    $htmlVystup = "";

    foreach ($skoly as $skola) {
    
        $htmlVystup .= "<div class=\"resume-wrap d-flex ftco-animate\">
                <div class=\"icon d-flex align-items-center justify-content-center\">
                    <span class=\"flaticon-ideas\"></span>
                </div>
                <div class=\"text pl-3\">
                    <span class=\"date\">". $skola["od"] . "-" . $skola["do"] . "</span>
                    <h2>" . $skola["obor"] . "</h2>
                    <span class=\"position\">" . $skola["nazev"] ."</span>
                    <p>" . $skola["popis"] . "</p>
                </div>
            </div>";
    }

    return $htmlVystup;
}


function vypisPracovniZkusenosti(array $zkusenosti): string
{
    $htmlVystup = "";

    foreach ($zkusenosti as $zkusenost) {
        $htmlVystup .= "<div class=\"resume-wrap d-flex ftco-animate\">
        <div class=\"icon d-flex align-items-center justify-content-center\">
            <span class=\"flaticon-ideas\"></span>
        </div>
        <div class=\"text pl-3\">
            <span class=\"date\">" . $zkusenost["od"] . "-" . $zkusenost["do"] . "</span>
            <h2>" . $zkusenost["pozice"] . "</h2>
            <span class=\"position\">" . $zkusenost["firma"] . "</span>
            <p>" . $zkusenost["popis"] . "</p>
        </div>
    </div>";
    }

    return $htmlVystup;
}

?>