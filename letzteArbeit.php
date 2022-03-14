<!DOCTYPE html>
<html>

<head>
  <title>Login per Datenbank</title>

  <meta charset="ISO-8859-1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="generator" content="Webocton - Scriptly (www.scriptly.de)">

  <link href="CSS/style.css" type="text/css" rel="stylesheet">
</head>
  <div class="box">
    <h1>Willkommen bei</h1>
    <img src="Bilder/Read-a-book.JPG" width="300px"><br><br>
    <?php
      
      /* Informationen aus der Session auslesen: */
      $identifikation = $_REQUEST["id"];

      /* Verbindung zur Datenbank �ffnen: */
      $db_host = 'localhost';
      $db_name = 'db_read_a_book';
      $db_user = 'root';
      $db_pw   = '';
	  
      /* Verbindung zur Datenbank �ffnen: */
      $db_link = mysqli_connect($db_host, $db_user, $db_pw, $db_name);

      /* Funktionsergebnis pr�fen: */
      if ($db_link){

       /* Eigentliche Datenbankabfrage in SQL: */
       $sql_str = " Delete from t_user where identifikation = '$identifikation' ";

       /* Ist der SQL-Befehl erfolgreich bearbeitet worden? */
       if (mysqli_query($db_link, $sql_str)){       
        echo "Ihr Konto wurde erfolgreich gel&ouml;scht. Wir w&uuml;rden uns freuen, Sie erneut registrieren zu d&uuml;rfen!";
        echo "<br><br><a href='Login.html'>Zur Hauptseite</a>";  
       }
       else{
        echo "Das L&ouml;schen Ihres Kontos ist fehlgeschlagen!";
        mysqli_error($db_link);
       }

       /* Verbindung zur Datenbank wieder schlie�en: */
       mysqli_close($db_link);
      }
      else
       echo "Verbindung zur Datenbank konnte nicht ge&ouml;ffnet werden...";
   
    ?>
  </div>
<body>

</body>
</html>
