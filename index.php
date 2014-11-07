<?php

   header("Location: " . "new_page.php");
  exit;
?>
<!DOCTYPE html>
<html>
<html>
  <head>
    <?php 
    require("components/site-functions.php");
    include("components/html-head.php"); ?>
  </head>
  <body>
    <p>Näidisdokument</p>
    <?php
    echo hello('Silja');
    ?>
  </body>
</html>
</html>