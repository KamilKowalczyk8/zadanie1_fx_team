<html>
 <head>
     

  <meta charset="utf-8">
  <title>Panel admina</title>
 </head>
<body class='tabelka' >
          
 <h1>Panel Administratora</h1>
  <table border="1" class='tabelka'>
   <tr class='tabelka'>
       <th>klasy</th><th>temat</th><th>tresc</th><th>data_godzina</th><th>data_godzina_oddania</th>
     <th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM nauczyciel"))
{
        $sql->execute();
        $sql->bind_result($klasy, $temat, $tresc, $data_godzina, $data_godzina_oddania);
        while ($sql->fetch())
        {
                echo "<tr class='tabelka'>
                        <td>$klasy</td>
                        <td>$temat</td>
                        <td>$tresc</td>
                        <td>$data_godzina</td>
                        <td>$data_godzina_oddania</td>
                        <td><a href=\"edycja.php?klasy=$klasy\">Edytuj</a></td>
                        <td><a href=\"usun.php?klasy=$klasy\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
 }
//else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );

 $baza->close();
?>
  </table>
  <a href="dodaj1.php">Dodaj nowe</a>
       
 </body>
</html>