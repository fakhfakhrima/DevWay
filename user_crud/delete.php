<?php
@include '../login_system/config.php';


if(isset($_GET["id"])){
    $id = $_GET["id"];
/*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
*/
    $sql = "DELETE FROM user_form WHERE id=$id";
    $conn->query($sql);
}

header("location: ../user_crud/index.php");
exit;


?>