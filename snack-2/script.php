<?php

$nome = $_GET["nome"];
$eta = $_GET["eta"];
$mail = $_GET["mail"];
$controlloNome = false;
$controlloEta = false;
$controlloMail = false;

if (strlen($nome) < 3) {
    echo 'il nome è troppo corto <br>';
    $controlloNome = false;
} else {
    echo 'il nome va bene <br>';
    $controlloNome = true;
}


if (!is_numeric($eta)) {
    echo "l'età non è un numero <br>";
    $controlloEta = false;
} else {
    echo "l'età va bene <br>";
    $controlloEta = true;
}


if ((strpos($mail, '@')) && (strpos($mail,'.'))) {
    echo 'la mail va bene <br>';
    $controlloMail = true;
} else {
    echo 'la mail con contiene punto e/o chiocciola <br>';
    $controlloMail = false;
}


if ($controlloNome == true && $controlloEta == true && $controlloMail == true) {
    echo 'accesso riuscito';
} else {
    echo 'accesso negato';
}

?>