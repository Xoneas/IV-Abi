<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number format</title>
  </head>
  <body>
    <?php
 
    $zahl = 312387.234423423423;
    
    echo $zahl;
    
    echo "<br> <br>";
    
    echo "Mit <kbd>number_format</kbd>:<br>";
    echo number_foramt($zahl, 2, ",", ".");
    
?>
  </body>
</html>
