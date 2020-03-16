<?php
include "polacz.php";
$id = wczytaj("id");
$klasa = wczytaj("klasa");
$imie_nazwisko = wczytaj("imie_nazwisko");
$link = wczytaj("link");
$rozwiazanie = wczytaj("rozwiazanie");
$czas_oddania = wczytaj("czas_oddania");
$uwagi_nauczyciela = wczytaj("uwagi_nauczyciela");
$adresIP = wczytaj("adresIP");

$sql = $baza->prepare("INSERT INTO uczen VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("isssssss", $id, $klasa, $imie_nazwisko, $link, $rozwiazanie, $czas_oddania, $uwagi_nauczyciela, $adresIP);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
echo "<a href=https://localhost/zadanie/index.php><h2>Wroc</h2></a>"
?>