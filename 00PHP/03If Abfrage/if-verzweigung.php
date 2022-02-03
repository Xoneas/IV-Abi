<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Titel</title>
  </head>
  <body>
<?php
    
    $alter = $_REQUEST["alter"];
    
    if ($alter < 18) {
      echo "Du bist <b> NICHT <b> volljährig!";
    }
    else  {
      echo "Du bist volljährig";
    }
    
    ?>
  </body>
</html>
