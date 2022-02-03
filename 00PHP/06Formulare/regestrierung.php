<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Regestrierung</title>
</head>
<body>

<?php

$vorname = $_REQUEST["vorname"];
$nachname = $_REQUEST["nachname"];
$email = $_REQUEST["email"];
$passwort = $_REQUEST["passwort"];
$passwort2 = $_REQUEST["passwort2"];
$geburtsdatum = $_REQUEST["geburtsdatum"];

echo "<h1> Hallo $vorname $nachname </h1> ";

echo "<p class='rot'> Hier sind Ihre angegebenen Daten: </p>";

echo " <table>
<tr>
<td> Email :</td>
<td> $email </td>
</tr>

<tr>
<td> Passwort </td>
<td> $passwort </td>
</tr>

<tr>
<td> Passwort2 : </td>
<td> $passwort2 </td>
</tr>

<tr>
<td> Geburtsdatum: </td>
<td> $geburtsdatum </td>
</tr>
</table>
";
?>

</body>
</html>
