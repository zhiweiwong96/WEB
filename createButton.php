<?php

  require 'connection.php';

  $conn = Connect();

  $title = $genre = $year = $synopsis = $image = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {

    $directory = "img/";
    $file = $directory.basename($_FILES["imageFile"]["name"]);
    $upload = 1;
    $imageType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

      if(isset($_POST["submit"]))
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

      $title = $conn->real_escape_string($_POST['title']);
      $year = $conn->real_escape_string($_POST['year']);
      $genre = $conn->real_escape_string($_POST['genre']);
      $imageFile = strtolower(pathinfo($file,PATHINFO_EXTENSION));
      $synopsis = $conn->real_escape_string($_POST['synopsis']);

      $query="INSERT INTO movie(title,year,genre,image,synopsis) VALUES ('$title','$year','$genre','$file','$synopsis')";

      if(!$conn->query($query)){
        die("Fail to upload movie: ".$conn->error);
      }
      else{
        echo'<script>
          window.alert("Upload Movie Successfully");
          window.location.href = "home(admin).php"
          </script>';
      }

      $conn->close();
    }

 ?>
