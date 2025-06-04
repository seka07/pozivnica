<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "anaa.07@live.de";
    $subject = "Nova potvrda dolaska";

    $ime = htmlspecialchars($_POST['ime'] ?? '');
    $prezime = htmlspecialchars($_POST['prezime'] ?? '');
    $potvrda = htmlspecialchars($_POST['potvrda'] ?? '');
    $broj = htmlspecialchars($_POST['broj'] ?? '0');
    $gosti = htmlspecialchars($_POST['gosti'] ?? '');
    $poruka = htmlspecialchars($_POST['poruka'] ?? '');

    $body = "Ime: $ime\nPrezime: $prezime\nPotvrda dolaska: $potvrda\nBroj gostiju: $broj\nImena gostiju: $gosti\nPoruka: $poruka";
    $headers = "From: noreply@tvojadomena.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Hvala! Vaša potvrda je poslana.</h2>";
    } else {
        echo "<h2>Greška pri slanju. Pokušajte ponovno.</h2>";
    }
} else {
    header("Location: pozivnica.html");
    exit;
}
?>
