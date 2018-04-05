<?php

session_start();

if($_SESSION["user"]!="admin" || $_SESSION["pass"]!="123456" ){

    header("location: Error.php");
    die();

    session_abort();

}

?>
