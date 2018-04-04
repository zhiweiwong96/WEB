<?php

  require "connection.php";

  $conn = Connect();

  $id = 0;

  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query = "DELETE FROM movie WHERE video_id='$id'";

    if($conn->query($query))
    {
      echo '<script>
        window.alert("Movie Succefully Deleted!");
        window.location.href="delete.php"
        </script>';
    }else {
      echo($conn->error);
    }
  }

 ?>
