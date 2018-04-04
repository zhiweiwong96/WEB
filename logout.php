<?php
  session_start();
  session_destroy();
  echo '<script>
  window.alert("Log Out Succefully");
  window.location.href="home.php"
  </script>';

 ?>
