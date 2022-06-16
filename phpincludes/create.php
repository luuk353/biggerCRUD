<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO reizen (hotel, begindatum, einddatum, hotel_prijs, sterren, image ) VALUES (:hotel, :begindatum, :einddatum, :hotel_prijs, :sterren, :image)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":hotel", $_POST["hotel"]);
        $stmt->bindParam(":begindatum", $_POST["begindatum"]);
        $stmt->bindParam(":einddatum", $_POST["einddatum"]);
        $stmt->bindParam(":hotel_prijs", $_POST["hotel_prijs"]);
        $stmt->bindParam(":sterren", $_POST["sterren"]);
        $stmt->bindParam(":image", $_POST["image"]);
        $stmt->execute();
    
        header("Location:../vluchtboeken.php");
        exit();
    }

    else{    
        header("Location:../admin.php");
        exit();
    } 
    
?>