<?php

  if(isset($_REQUEST['user'])){
    $username = $_REQUEST['user'];
  }

  if(isset($_REQUEST['pass'])){
    $password = $_REQUEST['pass'];
  }

  if($username == "admin" && $password =="123456")
  {
    session_start();
    $_SESSION["user"] = "admin";
    $_SESSION["pass"] = "123456";

    require 'connection.php';

    $conn = Connect();

    $sql = "select * from admin";

    $result = mysqli_query($conn,$sql);

    if($result->num_rows > 0){

      while($row = $result->fetch_assoc()){
        echo "Welcome back $username  <br> ";
        echo "Page will return to Home Page in 3 seconds";
        header("Refresh: 3; url=home(admin).php");
      }

    }else{
      echo "No record found!";
    }

    $conn -> close();
  }
  else{
    echo "User not found";
    header("Refresh 3; url=home.php");
  }
?>
