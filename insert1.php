<?php
include "polacz.php";
$klasy = wczytaj("klasy");
$temat = wczytaj("temat");
$tresc = wczytaj("tresc");
$data_godzina = wczytaj("data_godzina");
$data_godzina_oddania = wczytaj("data_godzina_oddania");


$sql = $baza->prepare("INSERT INTO nauczyciel VALUES (?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("sssss", $klasy, $temat, $tresc, $data_godzina, $data_godzina_oddania);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
echo "<a href=https://localhost/zadanie/index1.php><h2>Wroc</h2></a>"
?>