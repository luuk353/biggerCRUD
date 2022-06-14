<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO menukaart (titel, beschrijving, prijs ) VALUES (:titel, :beschrijving, :prijs)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":titel", $_POST["titel"]);
        $stmt->bindParam(":prijs", $_POST["prijs"]);
        $stmt->bindParam(":beschrijving", $_POST["beschrijving"]);
        $stmt->execute();
    
        header("Location:../bestel.php");
        exit();
    }

    else{    
        header("Location:../admin.php");
        exit();
    } 
    
?>