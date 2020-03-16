<html>
 <head>
    

  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
<body class='tabelka' >
          
 <h1>Panel Administratora</h1>
  <table border="1" class='tabelka'>
   <tr class='tabelka'>
       <th>id</th><th>klasa</th><th>imie_nazwisko</th><th>link</th><th>rozwiazanie</th><th>czas_oddania</th><th>uwagi_nauczyciela</th><th>adresIP</th>
     <th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM uczen"))
{
        $sql->execute();
        $sql->bind_result($id, $klasa, $imie_nazwisko, $link, $rozwiazanie, $czas_oddania, $uwagi_nauczyciela, $adresIP);
        while ($sql->fetch())
        {
                echo "<tr class='tabelka'>
                        <td>$id</td>
                        <td>$klasa</td>
                        <td>$imie_nazwisko</td>
                        <td>$link</td>
                        <td>$rozwiazanie</td>
                        <td>$czas_oddania</td>
                        <td>$uwagi_nauczyciela</td>
                        <td>$adresIP</td>
                        <td><a href=\"edycja.php?id=$id\">Edytuj</a></td>
                        <td><a href=\"usun.php?id=$id\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
 }
//else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );

 $baza->close();
?>
  </table>
  <a href="dodaj.php">Dodaj nowe</a>
       
 </body>
</html>