<?php
  session_start();
  session_destroy();
  echo "Good Bye <br> ";
  echo "Page will return to Home Page in 3 seconds";
  header("Refresh: 3; url=home.php");
 ?>
