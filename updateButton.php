<?php

  require "connection.php";

  $conn = Connect();

  $title = $genre = $year = $synopsis = $image = "";
  $id = 0;

  if (isset($_POST['update']))
  {
    $directory = "img/";
    $file = $directory . basename($_FILES["imageFile"]["name"]);
    $upload = 1;
    $imageType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

      if(isset($_POST["update"]))
      {
        $check = getimagesize($_FILES["imageFile"]["tmp_name"]);

        if ($check !== false) {
          echo "File is ans image - ". $check["mime"] . ".<br>";
          $upload = 1;
        }else {
          echo "File is not an image.<br>";
          $upload = 0;
        }
      }

      if (file_exists($file)) {
          echo "Sorry, file already exists.<br>";
          $upload = 0;
      }

      if($_FILES["imageFile"]["size"] > 5000000){
        echo "Invalid file size.<br>";
        $upload = 0;
      }

      if($imageType != "jpg" && $imageType != "jpeg" && $imageType != "png" && $imageType != "gif")
      {
        echo "invalid file type.<br>";
        $upload = 0;
      }

      if($upload == 0)
      {
        echo "File cannot upload.<br>";
      }
      else {
        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"],$file)){
          echo "File uploaded.<br>";
        }else {
          echo "Error uploading file.<br>";
        }
      }

      $id = $_POST['id'];
      $title = $conn->real_escape_string($_POST['title']);
      $year = $conn->real_escape_string($_POST['year']);
      $genre = $conn->real_escape_string($_POST['genre']);
      $imageFile = strtolower(pathinfo($file,PATHINFO_EXTENSION));
      $synopsis = $conn->real_escape_string($_POST['synopsis']);

      $query="UPDATE movie SET title='$title',year='$year',genre='$genre',image='$file',synopsis='$synopsis' WHERE video_id='$id'";

      if(!$conn->query($query)){
        die("Fail to updated movie: ".$conn->error);
      }
      else{
        echo'<script>
          window.alert("Update Movie Successfully");
          window.location.href = "home(admin).php"
          </script>';
      }

      $conn->close();
    }

 ?>
