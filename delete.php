<?php
    //database connectionn
    $serviceName = "localhost";
    $userName = "root";
    $password = "";
    $bd = "camp";
    $conn = new mysqli($serviceName , $userName , $password , $bd);
   
    $id = $_GET["Id"];

    $q  ="Delete from blood_camp where id = '$id'";

    mysqli_query($conn , $q);

    header("Location: display.php");
    exit;
?>