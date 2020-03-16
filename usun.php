<?php
include "polacz.php";
$id = wczytaj("id"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM uczen WHERE id=?;" ))
{
 $sql->bind_param( "i", $id);
 $sql->execute();
 $sql->close();
}
$baza->close();
echo "<a href=https://localhost/index.php/><h2>Wroc</h2></a>"
?>