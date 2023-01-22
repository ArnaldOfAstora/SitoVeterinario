<?php
$captcha = $_POST["captcha"];
$email = $_POST["email"];
$suggerimento = $_POST["suggerimento"];
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$sesso = $_POST["sesso"];
$eta = $_POST["eta"];

if($captcha != 5){
    printf("<h1>Accesso Negato</h1>");
    exit();
}

printf("<h2>I tuoi dati:</h2>");
echo "<br>";
printf("<h4>Email: %s</h4>", $email);
printf("<h4>Suggerimento: %s</h4>", $suggerimento);
printf("<h4>Nome: %s</h4>", $nome);
printf("<h4>Cognome: %s</h4>", $cognome);
printf("<h4>Sesso: %s</h4>", $sesso);
printf("<h4>Età: %s</h4>", $eta);
printf("<h4>Robot: no</h4>");
?>