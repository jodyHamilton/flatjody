<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>GC_Formmail</title>
</head>

<body bgcolor="#DDE8FF">

<p>&nbsp;</p>
<p>&nbsp;</p>
  <center>
        <form method="POST" action="gc_formmail.php">
  <table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="450">
  <colgroup span=1 style="font-family: Verdana; font-size:10pt; font-color: navy; text-align: right"></colgroup>
  
    <tr>
      <td>
        Nome:
      </td>
      <td>
        <input type="text" name="nome" size="25"></td>
    </tr>
    <tr>
      <td>Cognome: </td>
      <td>
        <input type="text" name="cognome" size="25"></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td>
        <input type="text" name="email" size="25"></td>
    </tr>
    <tr>
      <td>Commento: </td>
      <td><textarea rows="8" name="commento" cols="21"></textarea></td>
    </tr>
  </table>
  </center>
<p align="center"><input type="submit" value="Invia"></p>
</form>

<br><? $act=1; include "gc_formmail.php"; ?>

</body>

</html>