<?php

include_once("connect.php");

if(isset($_POST["edit"])){  
    $sql = "UPDATE bepis_airline
        SET titel = :titel, prijs = :prijs, beschrijving = :beschrijving
        WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":titel", $_POST["titel"]);
    $stmt->bindParam(":prijs", $_POST["prijs"]);
    $stmt->bindParam(":beschrijving", $_POST["beschrijving"]);
    $stmt->execute();

    header("Location: ../vluchtboeken.php");
    exit();
}



?>