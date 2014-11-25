<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>
  <body>
  <?php

        $result_link = "result.php";
        $username = "Ramon";
        $age = 17;
  ?>

  <a href="<?php echo $result_link.'?username='.$username.'&age='.$age; ?>">Result</a>

  </body>
</html>
