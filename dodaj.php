<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>
  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert.php">
   <table border="0">
      <tr><td>id</td><td><input name="id"></td></tr>
      <tr><td>klasa</td><td><input name="klasa"></td></tr>
      <tr><td>imie_nazwisko</td><td><input name="imie_nazwisko"></td></tr>
       <tr><td>link</td><td><input  name="link"></td></tr>
        <tr><td>rozwiazanie</td><td><input name="rozwiazanie"></td></tr>
        <tr><td>czas_oddania</td><td><input type="datetime-local" name="czas_oddania"></td></tr>
        <tr><td>uwagi_nauczyciela</td><td><input name="uwagi_nauczyciela"></td></tr>
        <tr><td>adresIP</td><td><input name="adresIP"></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
   </table>
  </form>
 </body>
</html>