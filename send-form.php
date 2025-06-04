<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = htmlspecialchars($_POST["ime"]);
    $prezime = htmlspecialchars($_POST["prezime"]);
    $potvrda = htmlspecialchars($_POST["potvrda"]);
    $broj = htmlspecialchars($_POST["broj"]);
    $poruka = htmlspecialchars($_POST["poruka"]);

    $to = "anaa.07@live.de";
    $subject = "Nova prijava s pozivnice";
    $body = "Ime: $ime\nPrezime: $prezime\nPotvrda: $potvrda\nBroj gostiju: $broj\nPoruka: $poruka";
    $headers = "From: noreply@tvojadomena.com";

    if (mail($to, $subject, $body, $headers)) {
        echo \"Hvala! Vaša prijava je zaprimljena.\";
    } else {
        echo \"Došlo je do greške pri slanju.\";
    }
}
?>
