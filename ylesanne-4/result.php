<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsiste tagasiside</title>
  </head>
  <?php

  $value = "arvestus";

  setcookie("Cookie", $value, time()+20);

  if(!empty($_COOKIE["Cookie"])){
      echo $value;
  }else{
      echo "Cookiet ei ole.";
  }

  ?>
  <body>

  </body>
</html>
