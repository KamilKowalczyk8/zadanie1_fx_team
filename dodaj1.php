<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>
  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert1.php">
   <table border="0">
      <tr><td>klasy</td><td><select name="klasy" id="klasy">
          <option value="1Tp1">1Tp1</option>
          <option value="1Tp2">1Tp2</option>
          <option value="2Pi">2Pi</option>
          <option value="2Tp1">2Tp1</option>
          <option value="2Tp2">2Tp2</option>
          <option value="3Ti">3Ti</option>
          <option value="4Ti">4Ti</option></td></tr>
      <tr><td>temat</td><td><input name="temat"></td></tr>
      <tr><td>tresc</td><td><input name="tresc"></td></tr>
       <tr><td>data_godzina</td><td><input type="datetime-local" name="data_godzina"></td></tr>
        <tr><td>data_godzina_oddania</td><td><input  type="datetime-local" name="data_godzina_oddania"></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
   </table>
  </form>
 </body>
</html>