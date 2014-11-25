<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <?php

    error_reporting(0);

         $username = $_POST["username"];
         $sex = $_POST["sex"];
         $submit = $_POST["submit"];

    if($submit == "submit"){
       if(!empty($_POST["sex"]) && !empty($_POST["username"])){
           echo "Tere {$username}, tundub, et olete {$sex}! ";
       }elseif(empty($username) && empty($sex)){
           echo "Palun minge tagasi ja täitke väljad.";
       }elseif(empty($sex)){
           echo "Palun minge tagasi ja valige sugu.";
       }elseif(empty($username)){
           echo "Palun minge tagasi ja sisestage nimi.";
       }
    }else{
        echo "Tundub, et sattusid siia otseteedpidi";
    }

    ?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
