<?php
setcookie("prenom", "Alexis", time() + 3600*24*30);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_COOKIE["prenom"])){
      echo "<h1> Hello " . $_COOKIE["prenom"] . "</h1>";
    }else
      echo "<h1> Je ne te connais pas.</h1>";
    ?>
  </body>
</html>
