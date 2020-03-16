<?php
include "polacz.php";
$klasy = wczytaj("klasy"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM nauczyciel WHERE klasy=?;" ))
{
 $sql->bind_param( "s", $klasy);
 $sql->execute();
 $sql->close();
}
$baza->close();
echo "<a href=https://localhost/zadanie/index1.php/><h2>Wroc</h2></a>"
?>